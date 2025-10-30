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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多主题检索返回信息
 *
 * @method array getErrors() 获取多日志主题检索对应的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrors(array $Errors) 设置多日志主题检索对应的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInfos() 获取多日志主题检索各日志主题信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfos(array $Infos) 设置多日志主题检索各日志主题信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchLogTopics extends AbstractModel
{
    /**
     * @var array 多日志主题检索对应的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errors;

    /**
     * @var array 多日志主题检索各日志主题信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Infos;

    /**
     * @param array $Errors 多日志主题检索对应的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Infos 多日志主题检索各日志主题信息
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
        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SearchLogErrors();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new SearchLogInfos();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}
