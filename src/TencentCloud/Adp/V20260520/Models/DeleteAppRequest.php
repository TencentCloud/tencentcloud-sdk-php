<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteApp请求参数结构体
 *
 * @method string getAppId() 获取<p>app_id</p>
 * @method void setAppId(string $AppId) 设置<p>app_id</p>
 * @method string getReason() 获取<p>删除原因(非必填,审批时展示)</p>
 * @method void setReason(string $Reason) 设置<p>删除原因(非必填,审批时展示)</p>
 */
class DeleteAppRequest extends AbstractModel
{
    /**
     * @var string <p>app_id</p>
     */
    public $AppId;

    /**
     * @var string <p>删除原因(非必填,审批时展示)</p>
     */
    public $Reason;

    /**
     * @param string $AppId <p>app_id</p>
     * @param string $Reason <p>删除原因(非必填,审批时展示)</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
