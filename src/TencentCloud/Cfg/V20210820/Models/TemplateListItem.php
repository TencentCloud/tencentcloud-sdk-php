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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 经验库列表信息
 *
 * @method integer getTemplateId() 获取经验库ID
 * @method void setTemplateId(integer $TemplateId) 设置经验库ID
 * @method string getTemplateTitle() 获取经验库标题
 * @method void setTemplateTitle(string $TemplateTitle) 设置经验库标题
 * @method string getTemplateDescription() 获取经验库描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置经验库描述
 * @method string getTemplateTag() 获取经验库标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateTag(string $TemplateTag) 设置经验库标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTemplateIsUsed() 获取经验库状态。1 -- 使用中，2 -- 停用
 * @method void setTemplateIsUsed(integer $TemplateIsUsed) 设置经验库状态。1 -- 使用中，2 -- 停用
 * @method string getTemplateCreateTime() 获取经验库创建时间
 * @method void setTemplateCreateTime(string $TemplateCreateTime) 设置经验库创建时间
 * @method string getTemplateUpdateTime() 获取经验库更新时间
 * @method void setTemplateUpdateTime(string $TemplateUpdateTime) 设置经验库更新时间
 * @method integer getTemplateUsedNum() 获取经验库关联的任务数量
 * @method void setTemplateUsedNum(integer $TemplateUsedNum) 设置经验库关联的任务数量
 */
class TemplateListItem extends AbstractModel
{
    /**
     * @var integer 经验库ID
     */
    public $TemplateId;

    /**
     * @var string 经验库标题
     */
    public $TemplateTitle;

    /**
     * @var string 经验库描述
     */
    public $TemplateDescription;

    /**
     * @var string 经验库标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateTag;

    /**
     * @var integer 经验库状态。1 -- 使用中，2 -- 停用
     */
    public $TemplateIsUsed;

    /**
     * @var string 经验库创建时间
     */
    public $TemplateCreateTime;

    /**
     * @var string 经验库更新时间
     */
    public $TemplateUpdateTime;

    /**
     * @var integer 经验库关联的任务数量
     */
    public $TemplateUsedNum;

    /**
     * @param integer $TemplateId 经验库ID
     * @param string $TemplateTitle 经验库标题
     * @param string $TemplateDescription 经验库描述
     * @param string $TemplateTag 经验库标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TemplateIsUsed 经验库状态。1 -- 使用中，2 -- 停用
     * @param string $TemplateCreateTime 经验库创建时间
     * @param string $TemplateUpdateTime 经验库更新时间
     * @param integer $TemplateUsedNum 经验库关联的任务数量
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateTitle",$param) and $param["TemplateTitle"] !== null) {
            $this->TemplateTitle = $param["TemplateTitle"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("TemplateTag",$param) and $param["TemplateTag"] !== null) {
            $this->TemplateTag = $param["TemplateTag"];
        }

        if (array_key_exists("TemplateIsUsed",$param) and $param["TemplateIsUsed"] !== null) {
            $this->TemplateIsUsed = $param["TemplateIsUsed"];
        }

        if (array_key_exists("TemplateCreateTime",$param) and $param["TemplateCreateTime"] !== null) {
            $this->TemplateCreateTime = $param["TemplateCreateTime"];
        }

        if (array_key_exists("TemplateUpdateTime",$param) and $param["TemplateUpdateTime"] !== null) {
            $this->TemplateUpdateTime = $param["TemplateUpdateTime"];
        }

        if (array_key_exists("TemplateUsedNum",$param) and $param["TemplateUsedNum"] !== null) {
            $this->TemplateUsedNum = $param["TemplateUsedNum"];
        }
    }
}
