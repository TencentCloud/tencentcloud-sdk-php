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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcb地域实例详情 - 异步关联云资源数据结构
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method array getEnvironments() 获取tcb环境实例详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironments(array $Environments) 设置tcb环境实例详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class TCBInstanceList extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var array tcb环境实例详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Environments;

    /**
     * @param string $Region 地域
     * @param array $Environments tcb环境实例详情
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Environments",$param) and $param["Environments"] !== null) {
            $this->Environments = [];
            foreach ($param["Environments"] as $key => $value){
                $obj = new TCBEnvironments();
                $obj->deserialize($value);
                array_push($this->Environments, $obj);
            }
        }
    }
}
