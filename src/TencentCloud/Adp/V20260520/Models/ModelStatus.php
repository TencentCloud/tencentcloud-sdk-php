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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型状态信息
 *
 * @method integer getConcurrency() 获取专属并发数
 * @method void setConcurrency(integer $Concurrency) 设置专属并发数
 * @method boolean getIsExclusive() 获取是否专属并发
 * @method void setIsExclusive(boolean $IsExclusive) 设置是否专属并发
 * @method integer getResourceStatus() 获取资源状态。1-资源可用, 2-资源已用尽
 * @method void setResourceStatus(integer $ResourceStatus) 设置资源状态。1-资源可用, 2-资源已用尽
 */
class ModelStatus extends AbstractModel
{
    /**
     * @var integer 专属并发数
     */
    public $Concurrency;

    /**
     * @var boolean 是否专属并发
     */
    public $IsExclusive;

    /**
     * @var integer 资源状态。1-资源可用, 2-资源已用尽
     */
    public $ResourceStatus;

    /**
     * @param integer $Concurrency 专属并发数
     * @param boolean $IsExclusive 是否专属并发
     * @param integer $ResourceStatus 资源状态。1-资源可用, 2-资源已用尽
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
        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("IsExclusive",$param) and $param["IsExclusive"] !== null) {
            $this->IsExclusive = $param["IsExclusive"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }
    }
}
