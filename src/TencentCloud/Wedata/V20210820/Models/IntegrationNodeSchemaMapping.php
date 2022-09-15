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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集成节点schema映射
 *
 * @method string getSourceSchemaId() 获取源schema id
 * @method void setSourceSchemaId(string $SourceSchemaId) 设置源schema id
 * @method string getSinkSchemaId() 获取目标schema id
 * @method void setSinkSchemaId(string $SinkSchemaId) 设置目标schema id
 */
class IntegrationNodeSchemaMapping extends AbstractModel
{
    /**
     * @var string 源schema id
     */
    public $SourceSchemaId;

    /**
     * @var string 目标schema id
     */
    public $SinkSchemaId;

    /**
     * @param string $SourceSchemaId 源schema id
     * @param string $SinkSchemaId 目标schema id
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
        if (array_key_exists("SourceSchemaId",$param) and $param["SourceSchemaId"] !== null) {
            $this->SourceSchemaId = $param["SourceSchemaId"];
        }

        if (array_key_exists("SinkSchemaId",$param) and $param["SinkSchemaId"] !== null) {
            $this->SinkSchemaId = $param["SinkSchemaId"];
        }
    }
}
