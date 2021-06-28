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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时精简信息
 *
 * @method integer getRuntimeId() 获取运行时id
 * @method void setRuntimeId(integer $RuntimeId) 设置运行时id
 * @method string getDisplayName() 获取运行时名称，用户输入，同一uin内唯一
 * @method void setDisplayName(string $DisplayName) 设置运行时名称，用户输入，同一uin内唯一
 * @method integer getType() 获取运行时类型：0: sandbox, 1:shared, 2:private
 * @method void setType(integer $Type) 设置运行时类型：0: sandbox, 1:shared, 2:private
 * @method string getZone() 获取运行时所在地域，tianjin，beijiing，guangzhou等
 * @method void setZone(string $Zone) 设置运行时所在地域，tianjin，beijiing，guangzhou等
 * @method string getArea() 获取运行时所在地域，tianjin，beijiing，guangzhou等（同Zone）
 * @method void setArea(string $Area) 设置运行时所在地域，tianjin，beijiing，guangzhou等（同Zone）
 * @method string getAddr() 获取运行时应用listener地址后缀
 * @method void setAddr(string $Addr) 设置运行时应用listener地址后缀
 */
class AbstractRuntimeMC extends AbstractModel
{
    /**
     * @var integer 运行时id
     */
    public $RuntimeId;

    /**
     * @var string 运行时名称，用户输入，同一uin内唯一
     */
    public $DisplayName;

    /**
     * @var integer 运行时类型：0: sandbox, 1:shared, 2:private
     */
    public $Type;

    /**
     * @var string 运行时所在地域，tianjin，beijiing，guangzhou等
     */
    public $Zone;

    /**
     * @var string 运行时所在地域，tianjin，beijiing，guangzhou等（同Zone）
     */
    public $Area;

    /**
     * @var string 运行时应用listener地址后缀
     */
    public $Addr;

    /**
     * @param integer $RuntimeId 运行时id
     * @param string $DisplayName 运行时名称，用户输入，同一uin内唯一
     * @param integer $Type 运行时类型：0: sandbox, 1:shared, 2:private
     * @param string $Zone 运行时所在地域，tianjin，beijiing，guangzhou等
     * @param string $Area 运行时所在地域，tianjin，beijiing，guangzhou等（同Zone）
     * @param string $Addr 运行时应用listener地址后缀
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
        if (array_key_exists("RuntimeId",$param) and $param["RuntimeId"] !== null) {
            $this->RuntimeId = $param["RuntimeId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }
    }
}
