<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可退还云硬盘详细信息
 *
 * @method string getDiskId() 获取云硬盘ID。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID。
 * @method boolean getIsReturnable() 获取云硬盘是否可退还。
 * @method void setIsReturnable(boolean $IsReturnable) 设置云硬盘是否可退还。
 * @method integer getReturnFailCode() 获取云硬盘退还失败错误码。
 * @method void setReturnFailCode(integer $ReturnFailCode) 设置云硬盘退还失败错误码。
 * @method string getReturnFailMessage() 获取云硬盘退还失败错误信息。
 * @method void setReturnFailMessage(string $ReturnFailMessage) 设置云硬盘退还失败错误信息。
 */
class DiskReturnable extends AbstractModel
{
    /**
     * @var string 云硬盘ID。
     */
    public $DiskId;

    /**
     * @var boolean 云硬盘是否可退还。
     */
    public $IsReturnable;

    /**
     * @var integer 云硬盘退还失败错误码。
     */
    public $ReturnFailCode;

    /**
     * @var string 云硬盘退还失败错误信息。
     */
    public $ReturnFailMessage;

    /**
     * @param string $DiskId 云硬盘ID。
     * @param boolean $IsReturnable 云硬盘是否可退还。
     * @param integer $ReturnFailCode 云硬盘退还失败错误码。
     * @param string $ReturnFailMessage 云硬盘退还失败错误信息。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("ReturnFailMessage",$param) and $param["ReturnFailMessage"] !== null) {
            $this->ReturnFailMessage = $param["ReturnFailMessage"];
        }
    }
}
