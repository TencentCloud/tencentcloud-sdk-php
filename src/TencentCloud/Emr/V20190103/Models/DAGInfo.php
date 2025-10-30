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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DAG信息
 *
 * @method string getID() 获取查询ID
 * @method void setID(string $ID) 设置查询ID
 * @method string getType() 获取DAG类型，目前只支持starrocks
 * @method void setType(string $Type) 设置DAG类型，目前只支持starrocks
 * @method string getContent() 获取返回的DAG的JSON字符串
 * @method void setContent(string $Content) 设置返回的DAG的JSON字符串
 */
class DAGInfo extends AbstractModel
{
    /**
     * @var string 查询ID
     */
    public $ID;

    /**
     * @var string DAG类型，目前只支持starrocks
     */
    public $Type;

    /**
     * @var string 返回的DAG的JSON字符串
     */
    public $Content;

    /**
     * @param string $ID 查询ID
     * @param string $Type DAG类型，目前只支持starrocks
     * @param string $Content 返回的DAG的JSON字符串
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
