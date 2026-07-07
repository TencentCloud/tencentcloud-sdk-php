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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型可用性
 *
 * @method array getInputModalities() 获取<p>该模型所有健康BYOK实例下支持的输入多模态能力的并集。模型不健康时返回空列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 * @method void setInputModalities(array $InputModalities) 设置<p>该模型所有健康BYOK实例下支持的输入多模态能力的并集。模型不健康时返回空列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 * @method string getModel() 获取<p>模型</p>
 * @method void setModel(string $Model) 设置<p>模型</p>
 * @method string getStatus() 获取<p>可用性状态</p><p>枚举值：</p><ul><li>Available： 可用</li><li>Unavailable： 不可用</li><li>Unknown： 未探测</li></ul>
 * @method void setStatus(string $Status) 设置<p>可用性状态</p><p>枚举值：</p><ul><li>Available： 可用</li><li>Unavailable： 不可用</li><li>Unknown： 未探测</li></ul>
 */
class ModelAvailability extends AbstractModel
{
    /**
     * @var array <p>该模型所有健康BYOK实例下支持的输入多模态能力的并集。模型不健康时返回空列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
     */
    public $InputModalities;

    /**
     * @var string <p>模型</p>
     */
    public $Model;

    /**
     * @var string <p>可用性状态</p><p>枚举值：</p><ul><li>Available： 可用</li><li>Unavailable： 不可用</li><li>Unknown： 未探测</li></ul>
     */
    public $Status;

    /**
     * @param array $InputModalities <p>该模型所有健康BYOK实例下支持的输入多模态能力的并集。模型不健康时返回空列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
     * @param string $Model <p>模型</p>
     * @param string $Status <p>可用性状态</p><p>枚举值：</p><ul><li>Available： 可用</li><li>Unavailable： 不可用</li><li>Unknown： 未探测</li></ul>
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
        if (array_key_exists("InputModalities",$param) and $param["InputModalities"] !== null) {
            $this->InputModalities = $param["InputModalities"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
