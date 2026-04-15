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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBootScript请求参数结构体
 *
 * @method string getInstanceId() 获取EMR实例Id
 * @method void setInstanceId(string $InstanceId) 设置EMR实例Id
 * @method string getBootType() 获取引导脚本类型,resourceAfter,clusterAfter,clusterBefore
 * @method void setBootType(string $BootType) 设置引导脚本类型,resourceAfter,clusterAfter,clusterBefore
 * @method array getPreExecutedFileSettings() 获取引导脚本的具体变更，如为空表示WhenRun时机无引导脚本
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) 设置引导脚本的具体变更，如为空表示WhenRun时机无引导脚本
 */
class ModifyBootScriptRequest extends AbstractModel
{
    /**
     * @var string EMR实例Id
     */
    public $InstanceId;

    /**
     * @var string 引导脚本类型,resourceAfter,clusterAfter,clusterBefore
     */
    public $BootType;

    /**
     * @var array 引导脚本的具体变更，如为空表示WhenRun时机无引导脚本
     */
    public $PreExecutedFileSettings;

    /**
     * @param string $InstanceId EMR实例Id
     * @param string $BootType 引导脚本类型,resourceAfter,clusterAfter,clusterBefore
     * @param array $PreExecutedFileSettings 引导脚本的具体变更，如为空表示WhenRun时机无引导脚本
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BootType",$param) and $param["BootType"] !== null) {
            $this->BootType = $param["BootType"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }
    }
}
