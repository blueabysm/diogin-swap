<?php
/**
 * 手机号类型的值
 *
 * @copyright Copyright (c) 2009-2012 Jingcheng Zhang <diogin@gmail.com>. All rights reserved.
 * @license   See "LICENSE" file bundled with this distribution.
 */

namespace swap;

/**
 * [类型] 手机号值
 */
class mobile_value extends str_value {

    public function is_valid() {
        return self::is_valid_mobile($this->value);
    }
    
    public static function is_valid_mobile($mobile) {
        return preg_match('/^1[\d]{10}$/', $mobile);
    }
}
