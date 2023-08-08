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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRiskCenterScanTask请求参数结构体
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getScanAssetType() 获取0-全扫，1-指定资产扫，2-排除资产扫，3-手动填写扫；1和2则Assets字段必填，3则SelfDefiningAssets必填
 * @method void setScanAssetType(integer $ScanAssetType) 设置0-全扫，1-指定资产扫，2-排除资产扫，3-手动填写扫；1和2则Assets字段必填，3则SelfDefiningAssets必填
 * @method array getScanItem() 获取扫描项目；port/poc/weakpass/webcontent/configrisk/exposedserver
 * @method void setScanItem(array $ScanItem) 设置扫描项目；port/poc/weakpass/webcontent/configrisk/exposedserver
 * @method integer getScanPlanType() 获取0-周期任务,1-立即扫描,2-定时扫描,3-自定义；0,2,3则ScanPlanContent必填
 * @method void setScanPlanType(integer $ScanPlanType) 设置0-周期任务,1-立即扫描,2-定时扫描,3-自定义；0,2,3则ScanPlanContent必填
 * @method array getAssets() 获取扫描资产信息列表
 * @method void setAssets(array $Assets) 设置扫描资产信息列表
 * @method string getScanPlanContent() 获取扫描计划详情
 * @method void setScanPlanContent(string $ScanPlanContent) 设置扫描计划详情
 * @method array getSelfDefiningAssets() 获取ip/域名/url数组
 * @method void setSelfDefiningAssets(array $SelfDefiningAssets) 设置ip/域名/url数组
 * @method TaskAdvanceCFG getTaskAdvanceCFG() 获取高级配置
 * @method void setTaskAdvanceCFG(TaskAdvanceCFG $TaskAdvanceCFG) 设置高级配置
 * @method integer getTaskMode() 获取体检模式，0-标准模式，1-快速模式，2-高级模式，默认标准模式
 * @method void setTaskMode(integer $TaskMode) 设置体检模式，0-标准模式，1-快速模式，2-高级模式，默认标准模式
 */
class CreateRiskCenterScanTaskRequest extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 0-全扫，1-指定资产扫，2-排除资产扫，3-手动填写扫；1和2则Assets字段必填，3则SelfDefiningAssets必填
     */
    public $ScanAssetType;

    /**
     * @var array 扫描项目；port/poc/weakpass/webcontent/configrisk/exposedserver
     */
    public $ScanItem;

    /**
     * @var integer 0-周期任务,1-立即扫描,2-定时扫描,3-自定义；0,2,3则ScanPlanContent必填
     */
    public $ScanPlanType;

    /**
     * @var array 扫描资产信息列表
     */
    public $Assets;

    /**
     * @var string 扫描计划详情
     */
    public $ScanPlanContent;

    /**
     * @var array ip/域名/url数组
     */
    public $SelfDefiningAssets;

    /**
     * @var TaskAdvanceCFG 高级配置
     */
    public $TaskAdvanceCFG;

    /**
     * @var integer 体检模式，0-标准模式，1-快速模式，2-高级模式，默认标准模式
     */
    public $TaskMode;

    /**
     * @param string $TaskName 任务名称
     * @param integer $ScanAssetType 0-全扫，1-指定资产扫，2-排除资产扫，3-手动填写扫；1和2则Assets字段必填，3则SelfDefiningAssets必填
     * @param array $ScanItem 扫描项目；port/poc/weakpass/webcontent/configrisk/exposedserver
     * @param integer $ScanPlanType 0-周期任务,1-立即扫描,2-定时扫描,3-自定义；0,2,3则ScanPlanContent必填
     * @param array $Assets 扫描资产信息列表
     * @param string $ScanPlanContent 扫描计划详情
     * @param array $SelfDefiningAssets ip/域名/url数组
     * @param TaskAdvanceCFG $TaskAdvanceCFG 高级配置
     * @param integer $TaskMode 体检模式，0-标准模式，1-快速模式，2-高级模式，默认标准模式
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ScanAssetType",$param) and $param["ScanAssetType"] !== null) {
            $this->ScanAssetType = $param["ScanAssetType"];
        }

        if (array_key_exists("ScanItem",$param) and $param["ScanItem"] !== null) {
            $this->ScanItem = $param["ScanItem"];
        }

        if (array_key_exists("ScanPlanType",$param) and $param["ScanPlanType"] !== null) {
            $this->ScanPlanType = $param["ScanPlanType"];
        }

        if (array_key_exists("Assets",$param) and $param["Assets"] !== null) {
            $this->Assets = [];
            foreach ($param["Assets"] as $key => $value){
                $obj = new TaskAssetObject();
                $obj->deserialize($value);
                array_push($this->Assets, $obj);
            }
        }

        if (array_key_exists("ScanPlanContent",$param) and $param["ScanPlanContent"] !== null) {
            $this->ScanPlanContent = $param["ScanPlanContent"];
        }

        if (array_key_exists("SelfDefiningAssets",$param) and $param["SelfDefiningAssets"] !== null) {
            $this->SelfDefiningAssets = $param["SelfDefiningAssets"];
        }

        if (array_key_exists("TaskAdvanceCFG",$param) and $param["TaskAdvanceCFG"] !== null) {
            $this->TaskAdvanceCFG = new TaskAdvanceCFG();
            $this->TaskAdvanceCFG->deserialize($param["TaskAdvanceCFG"]);
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }
    }
}
