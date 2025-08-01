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
 * DeleteNativeSparkSession请求参数结构体
 *
 * @method string getDataEngineId() 获取引擎id
 * @method void setDataEngineId(string $DataEngineId) 设置引擎id
 * @method string getResourceGroupId() 获取资源组id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组id
 * @method string getEngineSessionName() 获取spark session名称
 * @method void setEngineSessionName(string $EngineSessionName) 设置spark session名称
 */
class DeleteNativeSparkSessionRequest extends AbstractModel
{
    /**
     * @var string 引擎id
     */
    public $DataEngineId;

    /**
     * @var string 资源组id
     */
    public $ResourceGroupId;

    /**
     * @var string spark session名称
     */
    public $EngineSessionName;

    /**
     * @param string $DataEngineId 引擎id
     * @param string $ResourceGroupId 资源组id
     * @param string $EngineSessionName spark session名称
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

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("EngineSessionName",$param) and $param["EngineSessionName"] !== null) {
            $this->EngineSessionName = $param["EngineSessionName"];
        }
    }
}
