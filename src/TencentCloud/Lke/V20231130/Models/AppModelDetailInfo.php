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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型详情
 *
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method ModelParams getModelParams() 获取模型参数
 * @method void setModelParams(ModelParams $ModelParams) 设置模型参数
 * @method integer getHistoryLimit() 获取限制
 * @method void setHistoryLimit(integer $HistoryLimit) 设置限制
 * @method string getAliasName() 获取模型别名
 * @method void setAliasName(string $AliasName) 设置模型别名
 */
class AppModelDetailInfo extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var ModelParams 模型参数
     */
    public $ModelParams;

    /**
     * @var integer 限制
     */
    public $HistoryLimit;

    /**
     * @var string 模型别名
     */
    public $AliasName;

    /**
     * @param string $ModelName 模型名称
     * @param ModelParams $ModelParams 模型参数
     * @param integer $HistoryLimit 限制
     * @param string $AliasName 模型别名
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = new ModelParams();
            $this->ModelParams->deserialize($param["ModelParams"]);
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
