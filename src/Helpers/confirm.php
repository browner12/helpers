<?php

if (!function_exists('confirmPostModal')) {

    /**
     * generate modal to confirm a POST of data
     *
     * @param string $id
     * @param string $url
     * @param string $title
     * @param string $message
     * @param array  $hidden
     * @return string
     */
    function confirmPostModal($id, $url, $title, $message, array $hidden)
    {
        //setup
        $return = '<div class="modal hide fade" id="' . $id . '">
                        <div class="modal-header">
                            <a class="close" data-dismiss="modal">×</a>
                            <h3 class="modal-title">' . $title . '</h3>
                        </div>

                        <div class="modal-body">' . $message . '</div>

                        <div class="modal-footer">';

        //form
        $return .= '<form name="confirm" method="post" action="';
        $return .= $url;
        $return .= '" style="margin-bottom:0px; ">';

        //csrf
        $return .= '<input name="_token" type="hidden" value="';
        $return .= csrf_token();
        $return .= '">';

        foreach ($hidden as $key => $value) {
            $return .= '<input name="';
            $return .= $key;
            $return .= '" type="hidden" value="';
            $return .= $value;
            $return .= '" />';
        }

        $return .= '<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i> Cancel</button>
                    <button type="submit" class="btn btn-success" value="Confirm"><i class="fa fa-check-circle"></i> Confirm</button>
                </form>

            </div>
        </div>';

        //return
        return $return;
    }
}
