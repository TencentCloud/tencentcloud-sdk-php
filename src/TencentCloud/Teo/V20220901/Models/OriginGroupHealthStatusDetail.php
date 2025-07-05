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
 * 源站组健康状态详情。
 *
 * @method string getOriginGroupId() 获取源站组 ID。
 * @method void setOriginGroupId(string $OriginGroupId) 设置源站组 ID。
 * @method array getOriginHealthStatus() 获取根据所有探测区域的结果综合决策出来的源站组下各个源站的健康状态。超过一半的地域判定该源站不健康，则对应状态为不健康，否则为健康。
 * @method void setOriginHealthStatus(array $OriginHealthStatus) 设置根据所有探测区域的结果综合决策出来的源站组下各个源站的健康状态。超过一半的地域判定该源站不健康，则对应状态为不健康，否则为健康。
 * @method array getCheckRegionHealthStatus() 获取各个健康检查区域下源站的健康状态。
 * @method void setCheckRegionHealthStatus(array $CheckRegionHealthStatus) 设置各个健康检查区域下源站的健康状态。
 */
class OriginGroupHealthStatusDetail extends AbstractModel
{
    /**
     * @var string 源站组 ID。
     */
    public $OriginGroupId;

    /**
     * @var array 根据所有探测区域的结果综合决策出来的源站组下各个源站的健康状态。超过一半的地域判定该源站不健康，则对应状态为不健康，否则为健康。
     */
    public $OriginHealthStatus;

    /**
     * @var array 各个健康检查区域下源站的健康状态。
     */
    public $CheckRegionHealthStatus;

    /**
     * @param string $OriginGroupId 源站组 ID。
     * @param array $OriginHealthStatus 根据所有探测区域的结果综合决策出来的源站组下各个源站的健康状态。超过一半的地域判定该源站不健康，则对应状态为不健康，否则为健康。
     * @param array $CheckRegionHealthStatus 各个健康检查区域下源站的健康状态。
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
        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("OriginHealthStatus",$param) and $param["OriginHealthStatus"] !== null) {
            $this->OriginHealthStatus = [];
            foreach ($param["OriginHealthStatus"] as $key => $value){
                $obj = new OriginHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginHealthStatus, $obj);
            }
        }

        if (array_key_exists("CheckRegionHealthStatus",$param) and $param["CheckRegionHealthStatus"] !== null) {
            $this->CheckRegionHealthStatus = [];
            foreach ($param["CheckRegionHealthStatus"] as $key => $value){
                $obj = new CheckRegionHealthStatus();
                $obj->deserialize($value);
                array_push($this->CheckRegionHealthStatus, $obj);
            }
        }
    }
}
