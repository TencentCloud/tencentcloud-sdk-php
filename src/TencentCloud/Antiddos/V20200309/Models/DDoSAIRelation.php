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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS防护的AI防护开关
 *
 * @method string getDDoSAI() 获取AI防护开关，取值[
on(开启)
off(关闭)
]
 * @method void setDDoSAI(string $DDoSAI) 设置AI防护开关，取值[
on(开启)
off(关闭)
]
 * @method array getInstanceDetailList() 获取AI防护开关所属的资源实例
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置AI防护开关所属的资源实例
 */
class DDoSAIRelation extends AbstractModel
{
    /**
     * @var string AI防护开关，取值[
on(开启)
off(关闭)
]
     */
    public $DDoSAI;

    /**
     * @var array AI防护开关所属的资源实例
     */
    public $InstanceDetailList;

    /**
     * @param string $DDoSAI AI防护开关，取值[
on(开启)
off(关闭)
]
     * @param array $InstanceDetailList AI防护开关所属的资源实例
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
        if (array_key_exists("DDoSAI",$param) and $param["DDoSAI"] !== null) {
            $this->DDoSAI = $param["DDoSAI"];
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }
    }
}
