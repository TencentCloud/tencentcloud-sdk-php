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
 * @method integer getRuntimeId() 获取环境id
 * @method void setRuntimeId(integer $RuntimeId) 设置环境id
 * @method string getDisplayName() 获取环境名称，用户输入，同一uin内唯一
 * @method void setDisplayName(string $DisplayName) 设置环境名称，用户输入，同一uin内唯一
 * @method integer getType() 获取环境类型：0: sandbox, 1:shared, 2:private
 * @method void setType(integer $Type) 设置环境类型：0: sandbox, 1:shared, 2:private
 * @method string getZone() 获取环境所在地域，tianjin，beijiing，guangzhou等
 * @method void setZone(string $Zone) 设置环境所在地域，tianjin，beijiing，guangzhou等
 * @method string getArea() 获取环境所在地域，tianjin，beijiing，guangzhou等（同Zone）
 * @method void setArea(string $Area) 设置环境所在地域，tianjin，beijiing，guangzhou等（同Zone）
 * @method string getAddr() 获取环境应用listener地址后缀
 * @method void setAddr(string $Addr) 设置环境应用listener地址后缀
 * @method integer getStatus() 获取环境状态
 * @method void setStatus(integer $Status) 设置环境状态
 * @method integer getExpiredAt() 获取环境过期时间
 * @method void setExpiredAt(integer $ExpiredAt) 设置环境过期时间
 * @method integer getRuntimeClass() 获取环境运行类型：0:运行时类型、1:api类型
 * @method void setRuntimeClass(integer $RuntimeClass) 设置环境运行类型：0:运行时类型、1:api类型
 * @method boolean getDeployed() 获取是否已在当前环境发布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployed(boolean $Deployed) 设置是否已在当前环境发布
注意：此字段可能返回 null，表示取不到有效值。
 */
class AbstractRuntimeMC extends AbstractModel
{
    /**
     * @var integer 环境id
     */
    public $RuntimeId;

    /**
     * @var string 环境名称，用户输入，同一uin内唯一
     */
    public $DisplayName;

    /**
     * @var integer 环境类型：0: sandbox, 1:shared, 2:private
     */
    public $Type;

    /**
     * @var string 环境所在地域，tianjin，beijiing，guangzhou等
     */
    public $Zone;

    /**
     * @var string 环境所在地域，tianjin，beijiing，guangzhou等（同Zone）
     */
    public $Area;

    /**
     * @var string 环境应用listener地址后缀
     */
    public $Addr;

    /**
     * @var integer 环境状态
     */
    public $Status;

    /**
     * @var integer 环境过期时间
     */
    public $ExpiredAt;

    /**
     * @var integer 环境运行类型：0:运行时类型、1:api类型
     */
    public $RuntimeClass;

    /**
     * @var boolean 是否已在当前环境发布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deployed;

    /**
     * @param integer $RuntimeId 环境id
     * @param string $DisplayName 环境名称，用户输入，同一uin内唯一
     * @param integer $Type 环境类型：0: sandbox, 1:shared, 2:private
     * @param string $Zone 环境所在地域，tianjin，beijiing，guangzhou等
     * @param string $Area 环境所在地域，tianjin，beijiing，guangzhou等（同Zone）
     * @param string $Addr 环境应用listener地址后缀
     * @param integer $Status 环境状态
     * @param integer $ExpiredAt 环境过期时间
     * @param integer $RuntimeClass 环境运行类型：0:运行时类型、1:api类型
     * @param boolean $Deployed 是否已在当前环境发布
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("RuntimeClass",$param) and $param["RuntimeClass"] !== null) {
            $this->RuntimeClass = $param["RuntimeClass"];
        }

        if (array_key_exists("Deployed",$param) and $param["Deployed"] !== null) {
            $this->Deployed = $param["Deployed"];
        }
    }
}
