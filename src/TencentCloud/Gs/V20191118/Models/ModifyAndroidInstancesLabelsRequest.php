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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAndroidInstancesLabels请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表
 * @method string getOperation() 获取操作类型。ADD：标签键不存在的添加新标签，标签键存在的将覆盖原有标签REMOVE：根据标签键删除标签REPLACE：使用请求标签列表替换原来所有标签CLEAR：清除所有标签
 * @method void setOperation(string $Operation) 设置操作类型。ADD：标签键不存在的添加新标签，标签键存在的将覆盖原有标签REMOVE：根据标签键删除标签REPLACE：使用请求标签列表替换原来所有标签CLEAR：清除所有标签
 * @method array getAndroidInstanceLabels() 获取安卓实例标签列表
 * @method void setAndroidInstanceLabels(array $AndroidInstanceLabels) 设置安卓实例标签列表
 */
class ModifyAndroidInstancesLabelsRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表
     */
    public $AndroidInstanceIds;

    /**
     * @var string 操作类型。ADD：标签键不存在的添加新标签，标签键存在的将覆盖原有标签REMOVE：根据标签键删除标签REPLACE：使用请求标签列表替换原来所有标签CLEAR：清除所有标签
     */
    public $Operation;

    /**
     * @var array 安卓实例标签列表
     */
    public $AndroidInstanceLabels;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表
     * @param string $Operation 操作类型。ADD：标签键不存在的添加新标签，标签键存在的将覆盖原有标签REMOVE：根据标签键删除标签REPLACE：使用请求标签列表替换原来所有标签CLEAR：清除所有标签
     * @param array $AndroidInstanceLabels 安卓实例标签列表
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("AndroidInstanceLabels",$param) and $param["AndroidInstanceLabels"] !== null) {
            $this->AndroidInstanceLabels = [];
            foreach ($param["AndroidInstanceLabels"] as $key => $value){
                $obj = new AndroidInstanceLabel();
                $obj->deserialize($value);
                array_push($this->AndroidInstanceLabels, $obj);
            }
        }
    }
}
