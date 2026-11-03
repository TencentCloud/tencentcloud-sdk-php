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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDirectConnect请求参数结构体
 *
 * @method string getDirectConnectId() 获取<p>物理专线的ID。</p>
 * @method void setDirectConnectId(string $DirectConnectId) 设置<p>物理专线的ID。</p>
 * @method string getPlannedRepealDate() 获取<p>预计裁撤时间</p>
 * @method void setPlannedRepealDate(string $PlannedRepealDate) 设置<p>预计裁撤时间</p>
 */
class DeleteDirectConnectRequest extends AbstractModel
{
    /**
     * @var string <p>物理专线的ID。</p>
     */
    public $DirectConnectId;

    /**
     * @var string <p>预计裁撤时间</p>
     */
    public $PlannedRepealDate;

    /**
     * @param string $DirectConnectId <p>物理专线的ID。</p>
     * @param string $PlannedRepealDate <p>预计裁撤时间</p>
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
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("PlannedRepealDate",$param) and $param["PlannedRepealDate"] !== null) {
            $this->PlannedRepealDate = $param["PlannedRepealDate"];
        }
    }
}
