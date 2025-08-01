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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标准引擎资源组，配置相关信息
 *
 * @method string getResourceGroupId() 获取引擎资源组 ID
 * @method void setResourceGroupId(string $ResourceGroupId) 设置引擎资源组 ID
 * @method string getDataEngineId() 获取引擎ID
 * @method void setDataEngineId(string $DataEngineId) 设置引擎ID
 * @method array getStaticConfigPairs() 获取资源组静态参数，需要重启资源组生效
 * @method void setStaticConfigPairs(array $StaticConfigPairs) 设置资源组静态参数，需要重启资源组生效
 * @method array getDynamicConfigPairs() 获取资源组动态参数，下一个任务生效。
 * @method void setDynamicConfigPairs(array $DynamicConfigPairs) 设置资源组动态参数，下一个任务生效。
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 */
class StandardEngineResourceGroupConfigInfo extends AbstractModel
{
    /**
     * @var string 引擎资源组 ID
     */
    public $ResourceGroupId;

    /**
     * @var string 引擎ID
     */
    public $DataEngineId;

    /**
     * @var array 资源组静态参数，需要重启资源组生效
     */
    public $StaticConfigPairs;

    /**
     * @var array 资源组动态参数，下一个任务生效。
     */
    public $DynamicConfigPairs;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $ResourceGroupId 引擎资源组 ID
     * @param string $DataEngineId 引擎ID
     * @param array $StaticConfigPairs 资源组静态参数，需要重启资源组生效
     * @param array $DynamicConfigPairs 资源组动态参数，下一个任务生效。
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("StaticConfigPairs",$param) and $param["StaticConfigPairs"] !== null) {
            $this->StaticConfigPairs = [];
            foreach ($param["StaticConfigPairs"] as $key => $value){
                $obj = new EngineResourceGroupConfigPair();
                $obj->deserialize($value);
                array_push($this->StaticConfigPairs, $obj);
            }
        }

        if (array_key_exists("DynamicConfigPairs",$param) and $param["DynamicConfigPairs"] !== null) {
            $this->DynamicConfigPairs = [];
            foreach ($param["DynamicConfigPairs"] as $key => $value){
                $obj = new EngineResourceGroupConfigPair();
                $obj->deserialize($value);
                array_push($this->DynamicConfigPairs, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
