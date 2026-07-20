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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布摘要信息
 *
 * @method string getCreateTime() 获取<p>创建时间 (Unix时间戳,秒级)</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间 (Unix时间戳,秒级)</p>
 * @method string getDescription() 获取<p>发布描述</p>
 * @method void setDescription(string $Description) 设置<p>发布描述</p>
 * @method string getReleaseId() 获取<p>发布ID</p>
 * @method void setReleaseId(string $ReleaseId) 设置<p>发布ID</p>
 * @method integer getStatus() 获取<p>发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过</p>
 * @method void setStatus(integer $Status) 设置<p>发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过</p>
 * @method string getStatusDescription() 获取<p>状态描述</p>
 * @method void setStatusDescription(string $StatusDescription) 设置<p>状态描述</p>
 * @method AppShareAccessControl getAppShareAccessControl() 获取<p>应用分享访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppShareAccessControl(AppShareAccessControl $AppShareAccessControl) 设置<p>应用分享访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChannelIdList() 获取<p>发布渠道ID列表</p>
 * @method void setChannelIdList(array $ChannelIdList) 设置<p>发布渠道ID列表</p>
 * @method CorpShareConfig getCorpShareConfig() 获取<p>企业共享配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpShareConfig(CorpShareConfig $CorpShareConfig) 设置<p>企业共享配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReleaseSummary extends AbstractModel
{
    /**
     * @var string <p>创建时间 (Unix时间戳,秒级)</p>
     */
    public $CreateTime;

    /**
     * @var string <p>发布描述</p>
     */
    public $Description;

    /**
     * @var string <p>发布ID</p>
     */
    public $ReleaseId;

    /**
     * @var integer <p>发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过</p>
     */
    public $Status;

    /**
     * @var string <p>状态描述</p>
     */
    public $StatusDescription;

    /**
     * @var AppShareAccessControl <p>应用分享访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppShareAccessControl;

    /**
     * @var array <p>发布渠道ID列表</p>
     */
    public $ChannelIdList;

    /**
     * @var CorpShareConfig <p>企业共享配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpShareConfig;

    /**
     * @param string $CreateTime <p>创建时间 (Unix时间戳,秒级)</p>
     * @param string $Description <p>发布描述</p>
     * @param string $ReleaseId <p>发布ID</p>
     * @param integer $Status <p>发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过</p>
     * @param string $StatusDescription <p>状态描述</p>
     * @param AppShareAccessControl $AppShareAccessControl <p>应用分享访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChannelIdList <p>发布渠道ID列表</p>
     * @param CorpShareConfig $CorpShareConfig <p>企业共享配置</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReleaseId",$param) and $param["ReleaseId"] !== null) {
            $this->ReleaseId = $param["ReleaseId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDescription",$param) and $param["StatusDescription"] !== null) {
            $this->StatusDescription = $param["StatusDescription"];
        }

        if (array_key_exists("AppShareAccessControl",$param) and $param["AppShareAccessControl"] !== null) {
            $this->AppShareAccessControl = new AppShareAccessControl();
            $this->AppShareAccessControl->deserialize($param["AppShareAccessControl"]);
        }

        if (array_key_exists("ChannelIdList",$param) and $param["ChannelIdList"] !== null) {
            $this->ChannelIdList = $param["ChannelIdList"];
        }

        if (array_key_exists("CorpShareConfig",$param) and $param["CorpShareConfig"] !== null) {
            $this->CorpShareConfig = new CorpShareConfig();
            $this->CorpShareConfig->deserialize($param["CorpShareConfig"]);
        }
    }
}
