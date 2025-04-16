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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎配置信息
 *
 * @method string getDataEngineId() 获取引擎ID
 * @method void setDataEngineId(string $DataEngineId) 设置引擎ID
 * @method array getDataEngineConfigPairs() 获取用户自定义配置项集合
 * @method void setDataEngineConfigPairs(array $DataEngineConfigPairs) 设置用户自定义配置项集合
 * @method SessionResourceTemplate getSessionResourceTemplate() 获取作业集群资源参数配置模板
 * @method void setSessionResourceTemplate(SessionResourceTemplate $SessionResourceTemplate) 设置作业集群资源参数配置模板
 */
class DataEngineConfigInstanceInfo extends AbstractModel
{
    /**
     * @var string 引擎ID
     */
    public $DataEngineId;

    /**
     * @var array 用户自定义配置项集合
     */
    public $DataEngineConfigPairs;

    /**
     * @var SessionResourceTemplate 作业集群资源参数配置模板
     */
    public $SessionResourceTemplate;

    /**
     * @param string $DataEngineId 引擎ID
     * @param array $DataEngineConfigPairs 用户自定义配置项集合
     * @param SessionResourceTemplate $SessionResourceTemplate 作业集群资源参数配置模板
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("DataEngineConfigPairs",$param) and $param["DataEngineConfigPairs"] !== null) {
            $this->DataEngineConfigPairs = [];
            foreach ($param["DataEngineConfigPairs"] as $key => $value){
                $obj = new DataEngineConfigPair();
                $obj->deserialize($value);
                array_push($this->DataEngineConfigPairs, $obj);
            }
        }

        if (array_key_exists("SessionResourceTemplate",$param) and $param["SessionResourceTemplate"] !== null) {
            $this->SessionResourceTemplate = new SessionResourceTemplate();
            $this->SessionResourceTemplate->deserialize($param["SessionResourceTemplate"]);
        }
    }
}
