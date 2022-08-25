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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统一域名信息
 *
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method string getFullDomain() 获取完整域名记录
 * @method void setFullDomain(string $FullDomain) 设置完整域名记录
 * @method string getAlias() 获取别名
 * @method void setAlias(string $Alias) 设置别名
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method integer getStatus() 获取状态，1表示关闭，0表示开启，2表示关闭中，3表示开启中
 * @method void setStatus(integer $Status) 设置状态，1表示关闭，0表示开启，2表示关闭中，3表示开启中
 * @method integer getProjectId() 获取所属项目
 * @method void setProjectId(integer $ProjectId) 设置所属项目
 * @method string getDefaultValue() 获取默认入口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultValue(string $DefaultValue) 设置默认入口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyCount() 获取通道数量
 * @method void setProxyCount(integer $ProxyCount) 设置通道数量
 * @method integer getCreateTime() 获取创建时间，使用UNIX时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，使用UNIX时间戳
 * @method integer getUpdateTime() 获取更新时间，使用UNIX时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，使用UNIX时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBanStatus() 获取封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBanStatus(string $BanStatus) 设置封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Domain extends AbstractModel
{
    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var string 完整域名记录
     */
    public $FullDomain;

    /**
     * @var string 别名
     */
    public $Alias;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var integer 状态，1表示关闭，0表示开启，2表示关闭中，3表示开启中
     */
    public $Status;

    /**
     * @var integer 所属项目
     */
    public $ProjectId;

    /**
     * @var string 默认入口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultValue;

    /**
     * @var integer 通道数量
     */
    public $ProxyCount;

    /**
     * @var integer 创建时间，使用UNIX时间戳
     */
    public $CreateTime;

    /**
     * @var integer 更新时间，使用UNIX时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var string 封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BanStatus;

    /**
     * @param string $DomainId 域名ID
     * @param string $FullDomain 完整域名记录
     * @param string $Alias 别名
     * @param string $Type 类型
     * @param integer $Status 状态，1表示关闭，0表示开启，2表示关闭中，3表示开启中
     * @param integer $ProjectId 所属项目
     * @param string $DefaultValue 默认入口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyCount 通道数量
     * @param integer $CreateTime 创建时间，使用UNIX时间戳
     * @param integer $UpdateTime 更新时间，使用UNIX时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BanStatus 封禁解封状态：BANNED表示已封禁，RECOVER表示已解封或未封禁，BANNING表示封禁中，RECOVERING表示解封中，BAN_FAILED表示封禁失败，RECOVER_FAILED表示解封失败。
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("FullDomain",$param) and $param["FullDomain"] !== null) {
            $this->FullDomain = $param["FullDomain"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }
    }
}
