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
 * ModifyCosAuditMonitorAccount请求参数结构体
 *
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method array getMonitorAppIdSet() 获取需要监测的appid信息
 * @method void setMonitorAppIdSet(array $MonitorAppIdSet) 设置需要监测的appid信息
 * @method array getBindBucket() 获取选择存储桶映射关系
 * @method void setBindBucket(array $BindBucket) 设置选择存储桶映射关系
 */
class ModifyCosAuditMonitorAccountRequest extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var array 需要监测的appid信息
     */
    public $MonitorAppIdSet;

    /**
     * @var array 选择存储桶映射关系
     */
    public $BindBucket;

    /**
     * @param string $ResourceId 资源id
     * @param array $MonitorAppIdSet 需要监测的appid信息
     * @param array $BindBucket 选择存储桶映射关系
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("MonitorAppIdSet",$param) and $param["MonitorAppIdSet"] !== null) {
            $this->MonitorAppIdSet = $param["MonitorAppIdSet"];
        }

        if (array_key_exists("BindBucket",$param) and $param["BindBucket"] !== null) {
            $this->BindBucket = [];
            foreach ($param["BindBucket"] as $key => $value){
                $obj = new CosBucketId();
                $obj->deserialize($value);
                array_push($this->BindBucket, $obj);
            }
        }
    }
}
