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
 * @method string getAliasName() 获取<p>模型别名</p>
 * @method void setAliasName(string $AliasName) 设置<p>模型别名</p>
 * @method integer getHistoryLimit() 获取<p>限制</p>
 * @method void setHistoryLimit(integer $HistoryLimit) 设置<p>限制</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method ModelParams getModelParams() 获取<p>模型参数</p>
 * @method void setModelParams(ModelParams $ModelParams) 设置<p>模型参数</p>
 */
class AppModelDetailInfo extends AbstractModel
{
    /**
     * @var string <p>模型别名</p>
     */
    public $AliasName;

    /**
     * @var integer <p>限制</p>
     */
    public $HistoryLimit;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var ModelParams <p>模型参数</p>
     */
    public $ModelParams;

    /**
     * @param string $AliasName <p>模型别名</p>
     * @param integer $HistoryLimit <p>限制</p>
     * @param string $ModelName <p>模型名称</p>
     * @param ModelParams $ModelParams <p>模型参数</p>
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
        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = new ModelParams();
            $this->ModelParams->deserialize($param["ModelParams"]);
        }
    }
}
