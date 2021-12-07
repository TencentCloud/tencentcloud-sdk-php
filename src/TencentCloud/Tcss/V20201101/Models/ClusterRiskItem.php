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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险项是检查完之后，有问题的检测项，并且加了一些检查结果信息。
 *
 * @method ClusterCheckItem getCheckItem() 获取检测项相关信息
 * @method void setCheckItem(ClusterCheckItem $CheckItem) 设置检测项相关信息
 * @method string getVerifyInfo() 获取验证信息
 * @method void setVerifyInfo(string $VerifyInfo) 设置验证信息
 * @method string getErrorMessage() 获取事件描述,检查的错误信息
 * @method void setErrorMessage(string $ErrorMessage) 设置事件描述,检查的错误信息
 * @method integer getAffectedClusterCount() 获取受影响的集群数量
 * @method void setAffectedClusterCount(integer $AffectedClusterCount) 设置受影响的集群数量
 * @method integer getAffectedNodeCount() 获取受影响的节点数量
 * @method void setAffectedNodeCount(integer $AffectedNodeCount) 设置受影响的节点数量
 */
class ClusterRiskItem extends AbstractModel
{
    /**
     * @var ClusterCheckItem 检测项相关信息
     */
    public $CheckItem;

    /**
     * @var string 验证信息
     */
    public $VerifyInfo;

    /**
     * @var string 事件描述,检查的错误信息
     */
    public $ErrorMessage;

    /**
     * @var integer 受影响的集群数量
     */
    public $AffectedClusterCount;

    /**
     * @var integer 受影响的节点数量
     */
    public $AffectedNodeCount;

    /**
     * @param ClusterCheckItem $CheckItem 检测项相关信息
     * @param string $VerifyInfo 验证信息
     * @param string $ErrorMessage 事件描述,检查的错误信息
     * @param integer $AffectedClusterCount 受影响的集群数量
     * @param integer $AffectedNodeCount 受影响的节点数量
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
        if (array_key_exists("CheckItem",$param) and $param["CheckItem"] !== null) {
            $this->CheckItem = new ClusterCheckItem();
            $this->CheckItem->deserialize($param["CheckItem"]);
        }

        if (array_key_exists("VerifyInfo",$param) and $param["VerifyInfo"] !== null) {
            $this->VerifyInfo = $param["VerifyInfo"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("AffectedClusterCount",$param) and $param["AffectedClusterCount"] !== null) {
            $this->AffectedClusterCount = $param["AffectedClusterCount"];
        }

        if (array_key_exists("AffectedNodeCount",$param) and $param["AffectedNodeCount"] !== null) {
            $this->AffectedNodeCount = $param["AffectedNodeCount"];
        }
    }
}
