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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Span日志部分


 *
 * @method integer getTimestamp() 获取日志时间戳
 * @method void setTimestamp(integer $Timestamp) 设置日志时间戳
 * @method array getFields() 获取标签
 * @method void setFields(array $Fields) 设置标签
 */
class SpanLog extends AbstractModel
{
    /**
     * @var integer 日志时间戳
     */
    public $Timestamp;

    /**
     * @var array 标签
     */
    public $Fields;

    /**
     * @param integer $Timestamp 日志时间戳
     * @param array $Fields 标签
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new SpanTag();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }
    }
}
