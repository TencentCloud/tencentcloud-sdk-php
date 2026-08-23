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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像敏感信息
 *
 * @method integer getBehavior() 获取<p>敏感信息行为类型</p><p>枚举值：</p><ul><li>1： 以root账号启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
 * @method void setBehavior(integer $Behavior) 设置<p>敏感信息行为类型</p><p>枚举值：</p><ul><li>1： 以root账号启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
 * @method integer getType() 获取<p>规则类型</p>
 * @method void setType(integer $Type) 设置<p>规则类型</p>
 * @method string getLevel() 获取<p>风险级别</p><p>枚举值：</p><ul><li>1： 低风险</li><li>2： 中分线</li><li>3： 高风险</li><li>4： 严重风险</li></ul>
 * @method void setLevel(string $Level) 设置<p>风险级别</p><p>枚举值：</p><ul><li>1： 低风险</li><li>2： 中分线</li><li>3： 高风险</li><li>4： 严重风险</li></ul>
 * @method string getDescribe() 获取<p>风险描述</p>
 * @method void setDescribe(string $Describe) 设置<p>风险描述</p>
 * @method string getInstructionContent() 获取<p>风险内容</p>
 * @method void setInstructionContent(string $InstructionContent) 设置<p>风险内容</p>
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method string getOwnerAccountName() 获取<p>所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>所属账号名</p>
 * @method string getOwnerUin() 获取<p>所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>所属账号uin</p>
 * @method integer getOwnerAppId() 获取<p>所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>所属账号appid</p>
 * @method integer getAffectImageCount() 获取<p>影响镜像数</p>
 * @method void setAffectImageCount(integer $AffectImageCount) 设置<p>影响镜像数</p>
 * @method string getLayerId() 获取<p>镜像层Id</p>
 * @method void setLayerId(string $LayerId) 设置<p>镜像层Id</p>
 * @method integer getId() 获取<p>镜像Id</p>
 * @method void setId(integer $Id) 设置<p>镜像Id</p>
 * @method string getFirstFoundTime() 获取<p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstFoundTime(string $FirstFoundTime) 设置<p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestFoundTime() 获取<p>最近发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置<p>最近发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method integer getLayerIndex() 获取<p>镜像层序号</p>
 * @method void setLayerIndex(integer $LayerIndex) 设置<p>镜像层序号</p>
 */
class ImageSensitiveInfo extends AbstractModel
{
    /**
     * @var integer <p>敏感信息行为类型</p><p>枚举值：</p><ul><li>1： 以root账号启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
     */
    public $Behavior;

    /**
     * @var integer <p>规则类型</p>
     */
    public $Type;

    /**
     * @var string <p>风险级别</p><p>枚举值：</p><ul><li>1： 低风险</li><li>2： 中分线</li><li>3： 高风险</li><li>4： 严重风险</li></ul>
     */
    public $Level;

    /**
     * @var string <p>风险描述</p>
     */
    public $Describe;

    /**
     * @var string <p>风险内容</p>
     */
    public $InstructionContent;

    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>影响镜像数</p>
     */
    public $AffectImageCount;

    /**
     * @var string <p>镜像层Id</p>
     */
    public $LayerId;

    /**
     * @var integer <p>镜像Id</p>
     */
    public $Id;

    /**
     * @var string <p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstFoundTime;

    /**
     * @var string <p>最近发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestFoundTime;

    /**
     * @var integer <p>镜像层序号</p>
     */
    public $LayerIndex;

    /**
     * @param integer $Behavior <p>敏感信息行为类型</p><p>枚举值：</p><ul><li>1： 以root账号启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
     * @param integer $Type <p>规则类型</p>
     * @param string $Level <p>风险级别</p><p>枚举值：</p><ul><li>1： 低风险</li><li>2： 中分线</li><li>3： 高风险</li><li>4： 严重风险</li></ul>
     * @param string $Describe <p>风险描述</p>
     * @param string $InstructionContent <p>风险内容</p>
     * @param string $ImageId <p>镜像id</p>
     * @param string $OwnerAccountName <p>所属账号名</p>
     * @param string $OwnerUin <p>所属账号uin</p>
     * @param integer $OwnerAppId <p>所属账号appid</p>
     * @param integer $AffectImageCount <p>影响镜像数</p>
     * @param string $LayerId <p>镜像层Id</p>
     * @param integer $Id <p>镜像Id</p>
     * @param string $FirstFoundTime <p>首次发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestFoundTime <p>最近发现时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param integer $LayerIndex <p>镜像层序号</p>
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
        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("InstructionContent",$param) and $param["InstructionContent"] !== null) {
            $this->InstructionContent = $param["InstructionContent"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("AffectImageCount",$param) and $param["AffectImageCount"] !== null) {
            $this->AffectImageCount = $param["AffectImageCount"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FirstFoundTime",$param) and $param["FirstFoundTime"] !== null) {
            $this->FirstFoundTime = $param["FirstFoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("LayerIndex",$param) and $param["LayerIndex"] !== null) {
            $this->LayerIndex = $param["LayerIndex"];
        }
    }
}
