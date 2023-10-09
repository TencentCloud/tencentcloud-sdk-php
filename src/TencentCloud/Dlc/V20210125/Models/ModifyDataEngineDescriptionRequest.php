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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDataEngineDescription请求参数结构体
 *
 * @method string getDataEngineName() 获取要修改的引擎的名称
 * @method void setDataEngineName(string $DataEngineName) 设置要修改的引擎的名称
 * @method string getMessage() 获取引擎的描述信息，最大长度为250
 * @method void setMessage(string $Message) 设置引擎的描述信息，最大长度为250
 */
class ModifyDataEngineDescriptionRequest extends AbstractModel
{
    /**
     * @var string 要修改的引擎的名称
     */
    public $DataEngineName;

    /**
     * @var string 引擎的描述信息，最大长度为250
     */
    public $Message;

    /**
     * @param string $DataEngineName 要修改的引擎的名称
     * @param string $Message 引擎的描述信息，最大长度为250
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
