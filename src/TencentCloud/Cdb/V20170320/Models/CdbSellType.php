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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 售卖实例类型
 *
 * @method string getTypeName() 获取售卖实例名称
 * @method void setTypeName(string $TypeName) 设置售卖实例名称
 * @method array getEngineVersion() 获取引擎版本号
 * @method void setEngineVersion(array $EngineVersion) 设置引擎版本号
 * @method array getConfigIds() 获取售卖规格Id
 * @method void setConfigIds(array $ConfigIds) 设置售卖规格Id
 */
class CdbSellType extends AbstractModel
{
    /**
     * @var string 售卖实例名称
     */
    public $TypeName;

    /**
     * @var array 引擎版本号
     */
    public $EngineVersion;

    /**
     * @var array 售卖规格Id
     */
    public $ConfigIds;

    /**
     * @param string $TypeName 售卖实例名称
     * @param array $EngineVersion 引擎版本号
     * @param array $ConfigIds 售卖规格Id
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ConfigIds",$param) and $param["ConfigIds"] !== null) {
            $this->ConfigIds = $param["ConfigIds"];
        }
    }
}
