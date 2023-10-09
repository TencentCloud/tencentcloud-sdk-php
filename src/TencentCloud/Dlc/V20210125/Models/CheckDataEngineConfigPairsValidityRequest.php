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
 * CheckDataEngineConfigPairsValidity请求参数结构体
 *
 * @method string getChildImageVersionId() 获取引擎小版本ID
 * @method void setChildImageVersionId(string $ChildImageVersionId) 设置引擎小版本ID
 * @method array getDataEngineConfigPairs() 获取用户自定义参数
 * @method void setDataEngineConfigPairs(array $DataEngineConfigPairs) 设置用户自定义参数
 * @method string getImageVersionId() 获取引擎大版本ID，存在小版本ID时仅需传入小版本ID，不存在时会获取当前大版本下最新的小版本ID。
 * @method void setImageVersionId(string $ImageVersionId) 设置引擎大版本ID，存在小版本ID时仅需传入小版本ID，不存在时会获取当前大版本下最新的小版本ID。
 */
class CheckDataEngineConfigPairsValidityRequest extends AbstractModel
{
    /**
     * @var string 引擎小版本ID
     */
    public $ChildImageVersionId;

    /**
     * @var array 用户自定义参数
     */
    public $DataEngineConfigPairs;

    /**
     * @var string 引擎大版本ID，存在小版本ID时仅需传入小版本ID，不存在时会获取当前大版本下最新的小版本ID。
     */
    public $ImageVersionId;

    /**
     * @param string $ChildImageVersionId 引擎小版本ID
     * @param array $DataEngineConfigPairs 用户自定义参数
     * @param string $ImageVersionId 引擎大版本ID，存在小版本ID时仅需传入小版本ID，不存在时会获取当前大版本下最新的小版本ID。
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
        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("DataEngineConfigPairs",$param) and $param["DataEngineConfigPairs"] !== null) {
            $this->DataEngineConfigPairs = [];
            foreach ($param["DataEngineConfigPairs"] as $key => $value){
                $obj = new DataEngineConfigPair();
                $obj->deserialize($value);
                array_push($this->DataEngineConfigPairs, $obj);
            }
        }

        if (array_key_exists("ImageVersionId",$param) and $param["ImageVersionId"] !== null) {
            $this->ImageVersionId = $param["ImageVersionId"];
        }
    }
}
