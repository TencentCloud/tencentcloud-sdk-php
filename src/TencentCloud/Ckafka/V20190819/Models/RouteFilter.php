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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由列表过滤器
 *
 * @method string getName() 获取过滤名称,目前支持security-group-id,按安全组关联过滤
 * @method void setName(string $Name) 设置过滤名称,目前支持security-group-id,按安全组关联过滤
 * @method array getValues() 获取过滤值,当过滤名称为security-group-id时仅支持传单个value
 * @method void setValues(array $Values) 设置过滤值,当过滤名称为security-group-id时仅支持传单个value
 * @method string getRelation() 获取过滤关系,支持IN和NOT_IN,默认为IN
 * @method void setRelation(string $Relation) 设置过滤关系,支持IN和NOT_IN,默认为IN
 */
class RouteFilter extends AbstractModel
{
    /**
     * @var string 过滤名称,目前支持security-group-id,按安全组关联过滤
     */
    public $Name;

    /**
     * @var array 过滤值,当过滤名称为security-group-id时仅支持传单个value
     */
    public $Values;

    /**
     * @var string 过滤关系,支持IN和NOT_IN,默认为IN
     */
    public $Relation;

    /**
     * @param string $Name 过滤名称,目前支持security-group-id,按安全组关联过滤
     * @param array $Values 过滤值,当过滤名称为security-group-id时仅支持传单个value
     * @param string $Relation 过滤关系,支持IN和NOT_IN,默认为IN
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }
    }
}
