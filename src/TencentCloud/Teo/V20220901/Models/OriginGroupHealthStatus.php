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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站组健康状态。
 *
 * @method string getOriginGroupID() 获取源站组 ID。
 * @method void setOriginGroupID(string $OriginGroupID) 设置源站组 ID。
 * @method string getOriginGroupName() 获取源站组名。
 * @method void setOriginGroupName(string $OriginGroupName) 设置源站组名。
 * @method string getOriginType() 获取源站组类型，取值有：
<li>HTTP：HTTP 专用型；</li>
<li>GENERAL：通用型。</li>
 * @method void setOriginType(string $OriginType) 设置源站组类型，取值有：
<li>HTTP：HTTP 专用型；</li>
<li>GENERAL：通用型。</li>
 * @method string getPriority() 获取优先级。
 * @method void setPriority(string $Priority) 设置优先级。
 * @method array getOriginHealthStatus() 获取源站组里各源站的健康状态。
 * @method void setOriginHealthStatus(array $OriginHealthStatus) 设置源站组里各源站的健康状态。
 */
class OriginGroupHealthStatus extends AbstractModel
{
    /**
     * @var string 源站组 ID。
     */
    public $OriginGroupID;

    /**
     * @var string 源站组名。
     */
    public $OriginGroupName;

    /**
     * @var string 源站组类型，取值有：
<li>HTTP：HTTP 专用型；</li>
<li>GENERAL：通用型。</li>
     */
    public $OriginType;

    /**
     * @var string 优先级。
     */
    public $Priority;

    /**
     * @var array 源站组里各源站的健康状态。
     */
    public $OriginHealthStatus;

    /**
     * @param string $OriginGroupID 源站组 ID。
     * @param string $OriginGroupName 源站组名。
     * @param string $OriginType 源站组类型，取值有：
<li>HTTP：HTTP 专用型；</li>
<li>GENERAL：通用型。</li>
     * @param string $Priority 优先级。
     * @param array $OriginHealthStatus 源站组里各源站的健康状态。
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
        if (array_key_exists("OriginGroupID",$param) and $param["OriginGroupID"] !== null) {
            $this->OriginGroupID = $param["OriginGroupID"];
        }

        if (array_key_exists("OriginGroupName",$param) and $param["OriginGroupName"] !== null) {
            $this->OriginGroupName = $param["OriginGroupName"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("OriginHealthStatus",$param) and $param["OriginHealthStatus"] !== null) {
            $this->OriginHealthStatus = [];
            foreach ($param["OriginHealthStatus"] as $key => $value){
                $obj = new OriginHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginHealthStatus, $obj);
            }
        }
    }
}
