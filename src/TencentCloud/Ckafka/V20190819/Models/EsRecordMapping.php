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
 * 消息字段与 es 索引的映射关系
 *
 * @method string getColumnName() 获取es 索引成员名称
 * @method void setColumnName(string $ColumnName) 设置es 索引成员名称
 * @method string getJsonKey() 获取消息字段名称
 * @method void setJsonKey(string $JsonKey) 设置消息字段名称
 */
class EsRecordMapping extends AbstractModel
{
    /**
     * @var string es 索引成员名称
     */
    public $ColumnName;

    /**
     * @var string 消息字段名称
     */
    public $JsonKey;

    /**
     * @param string $ColumnName es 索引成员名称
     * @param string $JsonKey 消息字段名称
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
        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("JsonKey",$param) and $param["JsonKey"] !== null) {
            $this->JsonKey = $param["JsonKey"];
        }
    }
}
