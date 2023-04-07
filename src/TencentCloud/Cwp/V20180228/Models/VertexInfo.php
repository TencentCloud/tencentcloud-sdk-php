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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 攻击溯源节点信息
 *
 * @method integer getType() 获取该结点类型，进程:1；网络:2；文件:3；ssh:4；
 * @method void setType(integer $Type) 设置该结点类型，进程:1；网络:2；文件:3；ssh:4；
 * @method string getVid() 获取该节点包含的vid
 * @method void setVid(string $Vid) 设置该节点包含的vid
 * @method string getParentVid() 获取该节点的父节点vid
 * @method void setParentVid(string $ParentVid) 设置该节点的父节点vid
 * @method boolean getIsLeaf() 获取是否叶子
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否叶子
 * @method string getProcNamePrefix() 获取进程名，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcNamePrefix(string $ProcNamePrefix) 设置进程名，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcNameMd5() 获取进程名md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcNameMd5(string $ProcNameMd5) 设置进程名md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmdLinePrefix() 获取命令行，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdLinePrefix(string $CmdLinePrefix) 设置命令行，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmdLineMd5() 获取命令行md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdLineMd5(string $CmdLineMd5) 设置命令行md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePathPrefix() 获取文件路径，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePathPrefix(string $FilePathPrefix) 设置文件路径，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressPrefix() 获取请求目的地址，当Type=2时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressPrefix(string $AddressPrefix) 设置请求目的地址，当Type=2时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsWeDetect() 获取是否漏洞节点
 * @method void setIsWeDetect(boolean $IsWeDetect) 设置是否漏洞节点
 * @method boolean getIsAlarm() 获取是否告警节点
 * @method void setIsAlarm(boolean $IsAlarm) 设置是否告警节点
 * @method string getFilePathMd5() 获取文件路径md5，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePathMd5(string $FilePathMd5) 设置文件路径md5，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressMd5() 获取请求目的地址md5，当Type=2时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressMd5(string $AddressMd5) 设置请求目的地址md5，当Type=2时使用
注意：此字段可能返回 null，表示取不到有效值。
 */
class VertexInfo extends AbstractModel
{
    /**
     * @var integer 该结点类型，进程:1；网络:2；文件:3；ssh:4；
     */
    public $Type;

    /**
     * @var string 该节点包含的vid
     */
    public $Vid;

    /**
     * @var string 该节点的父节点vid
     */
    public $ParentVid;

    /**
     * @var boolean 是否叶子
     */
    public $IsLeaf;

    /**
     * @var string 进程名，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcNamePrefix;

    /**
     * @var string 进程名md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcNameMd5;

    /**
     * @var string 命令行，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdLinePrefix;

    /**
     * @var string 命令行md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdLineMd5;

    /**
     * @var string 文件路径，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePathPrefix;

    /**
     * @var string 请求目的地址，当Type=2时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressPrefix;

    /**
     * @var boolean 是否漏洞节点
     */
    public $IsWeDetect;

    /**
     * @var boolean 是否告警节点
     */
    public $IsAlarm;

    /**
     * @var string 文件路径md5，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePathMd5;

    /**
     * @var string 请求目的地址md5，当Type=2时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressMd5;

    /**
     * @param integer $Type 该结点类型，进程:1；网络:2；文件:3；ssh:4；
     * @param string $Vid 该节点包含的vid
     * @param string $ParentVid 该节点的父节点vid
     * @param boolean $IsLeaf 是否叶子
     * @param string $ProcNamePrefix 进程名，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcNameMd5 进程名md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CmdLinePrefix 命令行，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CmdLineMd5 命令行md5，当Type=1时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePathPrefix 文件路径，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressPrefix 请求目的地址，当Type=2时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsWeDetect 是否漏洞节点
     * @param boolean $IsAlarm 是否告警节点
     * @param string $FilePathMd5 文件路径md5，当Type=3时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressMd5 请求目的地址md5，当Type=2时使用
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }

        if (array_key_exists("ParentVid",$param) and $param["ParentVid"] !== null) {
            $this->ParentVid = $param["ParentVid"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ProcNamePrefix",$param) and $param["ProcNamePrefix"] !== null) {
            $this->ProcNamePrefix = $param["ProcNamePrefix"];
        }

        if (array_key_exists("ProcNameMd5",$param) and $param["ProcNameMd5"] !== null) {
            $this->ProcNameMd5 = $param["ProcNameMd5"];
        }

        if (array_key_exists("CmdLinePrefix",$param) and $param["CmdLinePrefix"] !== null) {
            $this->CmdLinePrefix = $param["CmdLinePrefix"];
        }

        if (array_key_exists("CmdLineMd5",$param) and $param["CmdLineMd5"] !== null) {
            $this->CmdLineMd5 = $param["CmdLineMd5"];
        }

        if (array_key_exists("FilePathPrefix",$param) and $param["FilePathPrefix"] !== null) {
            $this->FilePathPrefix = $param["FilePathPrefix"];
        }

        if (array_key_exists("AddressPrefix",$param) and $param["AddressPrefix"] !== null) {
            $this->AddressPrefix = $param["AddressPrefix"];
        }

        if (array_key_exists("IsWeDetect",$param) and $param["IsWeDetect"] !== null) {
            $this->IsWeDetect = $param["IsWeDetect"];
        }

        if (array_key_exists("IsAlarm",$param) and $param["IsAlarm"] !== null) {
            $this->IsAlarm = $param["IsAlarm"];
        }

        if (array_key_exists("FilePathMd5",$param) and $param["FilePathMd5"] !== null) {
            $this->FilePathMd5 = $param["FilePathMd5"];
        }

        if (array_key_exists("AddressMd5",$param) and $param["AddressMd5"] !== null) {
            $this->AddressMd5 = $param["AddressMd5"];
        }
    }
}
