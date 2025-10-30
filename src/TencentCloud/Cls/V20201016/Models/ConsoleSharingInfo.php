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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 控制台分享信息
 *
 * @method string getSharingId() 获取分享ID
 * @method void setSharingId(string $SharingId) 设置分享ID
 * @method string getSharingUrl() 获取分享链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharingUrl(string $SharingUrl) 设置分享链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConsoleSharingConfig getSharingConfig() 获取匿名分享配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSharingConfig(ConsoleSharingConfig $SharingConfig) 设置匿名分享配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpiredTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取分享链接状态
1: 正常 
-1: 因内容安全审查异常导致被封禁(存在于使用公网域名分享时)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置分享链接状态
1: 正常 
-1: 因内容安全审查异常导致被封禁(存在于使用公网域名分享时)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContentSafetyCode() 获取10001-广告 20001-政治 20002-色情 20004-社会事件 20011-暴力 20012-低俗 20006-违法犯罪 20007-谩骂 20008-欺诈 20013-版权 20104-谣言 21000-其他, 10086-聚合, 24001-暴恐（天御独有恶意类型），20472-违法，
24005-社会
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentSafetyCode(integer $ContentSafetyCode) 设置10001-广告 20001-政治 20002-色情 20004-社会事件 20011-暴力 20012-低俗 20006-违法犯罪 20007-谩骂 20008-欺诈 20013-版权 20104-谣言 21000-其他, 10086-聚合, 24001-暴恐（天御独有恶意类型），20472-违法，
24005-社会
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsoleSharingInfo extends AbstractModel
{
    /**
     * @var string 分享ID
     */
    public $SharingId;

    /**
     * @var string 分享链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharingUrl;

    /**
     * @var ConsoleSharingConfig 匿名分享配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SharingConfig;

    /**
     * @var integer 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 分享链接状态
1: 正常 
-1: 因内容安全审查异常导致被封禁(存在于使用公网域名分享时)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 10001-广告 20001-政治 20002-色情 20004-社会事件 20011-暴力 20012-低俗 20006-违法犯罪 20007-谩骂 20008-欺诈 20013-版权 20104-谣言 21000-其他, 10086-聚合, 24001-暴恐（天御独有恶意类型），20472-违法，
24005-社会
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentSafetyCode;

    /**
     * @param string $SharingId 分享ID
     * @param string $SharingUrl 分享链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConsoleSharingConfig $SharingConfig 匿名分享配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpiredTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 分享链接状态
1: 正常 
-1: 因内容安全审查异常导致被封禁(存在于使用公网域名分享时)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContentSafetyCode 10001-广告 20001-政治 20002-色情 20004-社会事件 20011-暴力 20012-低俗 20006-违法犯罪 20007-谩骂 20008-欺诈 20013-版权 20104-谣言 21000-其他, 10086-聚合, 24001-暴恐（天御独有恶意类型），20472-违法，
24005-社会
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
        if (array_key_exists("SharingId",$param) and $param["SharingId"] !== null) {
            $this->SharingId = $param["SharingId"];
        }

        if (array_key_exists("SharingUrl",$param) and $param["SharingUrl"] !== null) {
            $this->SharingUrl = $param["SharingUrl"];
        }

        if (array_key_exists("SharingConfig",$param) and $param["SharingConfig"] !== null) {
            $this->SharingConfig = new ConsoleSharingConfig();
            $this->SharingConfig->deserialize($param["SharingConfig"]);
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ContentSafetyCode",$param) and $param["ContentSafetyCode"] !== null) {
            $this->ContentSafetyCode = $param["ContentSafetyCode"];
        }
    }
}
