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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TargetDescription描述
 *
 * @method string getResourceDescription() 获取QCS资源六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
 * @method void setResourceDescription(string $ResourceDescription) 设置QCS资源六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
 * @method SCFParams getSCFParams() 获取云函数参数
 * @method void setSCFParams(SCFParams $SCFParams) 设置云函数参数
 * @method CkafkaTargetParams getCkafkaTargetParams() 获取Ckafka参数
 * @method void setCkafkaTargetParams(CkafkaTargetParams $CkafkaTargetParams) 设置Ckafka参数
 * @method ESTargetParams getESTargetParams() 获取ElasticSearch参数
 * @method void setESTargetParams(ESTargetParams $ESTargetParams) 设置ElasticSearch参数
 */
class TargetDescription extends AbstractModel
{
    /**
     * @var string QCS资源六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
     */
    public $ResourceDescription;

    /**
     * @var SCFParams 云函数参数
     */
    public $SCFParams;

    /**
     * @var CkafkaTargetParams Ckafka参数
     */
    public $CkafkaTargetParams;

    /**
     * @var ESTargetParams ElasticSearch参数
     */
    public $ESTargetParams;

    /**
     * @param string $ResourceDescription QCS资源六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
     * @param SCFParams $SCFParams 云函数参数
     * @param CkafkaTargetParams $CkafkaTargetParams Ckafka参数
     * @param ESTargetParams $ESTargetParams ElasticSearch参数
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
        if (array_key_exists("ResourceDescription",$param) and $param["ResourceDescription"] !== null) {
            $this->ResourceDescription = $param["ResourceDescription"];
        }

        if (array_key_exists("SCFParams",$param) and $param["SCFParams"] !== null) {
            $this->SCFParams = new SCFParams();
            $this->SCFParams->deserialize($param["SCFParams"]);
        }

        if (array_key_exists("CkafkaTargetParams",$param) and $param["CkafkaTargetParams"] !== null) {
            $this->CkafkaTargetParams = new CkafkaTargetParams();
            $this->CkafkaTargetParams->deserialize($param["CkafkaTargetParams"]);
        }

        if (array_key_exists("ESTargetParams",$param) and $param["ESTargetParams"] !== null) {
            $this->ESTargetParams = new ESTargetParams();
            $this->ESTargetParams->deserialize($param["ESTargetParams"]);
        }
    }
}
