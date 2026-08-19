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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单详情
 *
 * @method string getResourceID() 获取<p>资源ID</p>
 * @method void setResourceID(string $ResourceID) 设置<p>资源ID</p>
 * @method string getInquireKey() 获取<p>计费项</p>
 * @method void setInquireKey(string $InquireKey) 设置<p>计费项</p>
 * @method integer getStatus() 获取<p>订单状态</p><ul><li>1 正常</li><li>2 隔离期</li><li>3 已销毁</li></ul>
 * @method void setStatus(integer $Status) 设置<p>订单状态</p><ul><li>1 正常</li><li>2 隔离期</li><li>3 已销毁</li></ul>
 * @method integer getSourceType() 获取<p>订单类型</p>
 * @method void setSourceType(integer $SourceType) 设置<p>订单类型</p>
 */
class OrderDetail extends AbstractModel
{
    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceID;

    /**
     * @var string <p>计费项</p>
     */
    public $InquireKey;

    /**
     * @var integer <p>订单状态</p><ul><li>1 正常</li><li>2 隔离期</li><li>3 已销毁</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>订单类型</p>
     */
    public $SourceType;

    /**
     * @param string $ResourceID <p>资源ID</p>
     * @param string $InquireKey <p>计费项</p>
     * @param integer $Status <p>订单状态</p><ul><li>1 正常</li><li>2 隔离期</li><li>3 已销毁</li></ul>
     * @param integer $SourceType <p>订单类型</p>
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
        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
