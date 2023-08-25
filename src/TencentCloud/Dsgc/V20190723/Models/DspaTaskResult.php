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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务执行结果描述。
 *
 * @method string getResult() 获取任务结果。
 * @method void setResult(string $Result) 设置任务结果。
 * @method string getResultDescription() 获取结果描述。
 * @method void setResultDescription(string $ResultDescription) 设置结果描述。
 * @method string getResourceId() 获取资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID。
 * @method string getMetaType() 获取资源类型。
 * @method void setMetaType(string $MetaType) 设置资源类型。
 */
class DspaTaskResult extends AbstractModel
{
    /**
     * @var string 任务结果。
     */
    public $Result;

    /**
     * @var string 结果描述。
     */
    public $ResultDescription;

    /**
     * @var string 资源ID。
     */
    public $ResourceId;

    /**
     * @var string 资源类型。
     */
    public $MetaType;

    /**
     * @param string $Result 任务结果。
     * @param string $ResultDescription 结果描述。
     * @param string $ResourceId 资源ID。
     * @param string $MetaType 资源类型。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ResultDescription",$param) and $param["ResultDescription"] !== null) {
            $this->ResultDescription = $param["ResultDescription"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }
    }
}
