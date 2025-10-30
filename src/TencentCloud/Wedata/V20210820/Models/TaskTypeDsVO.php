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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务类型
 *
 * @method integer getTypeId() 获取任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeId(integer $TypeId) 设置任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTypeDesc() 获取TypeDesc描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeDesc(string $TypeDesc) 设置TypeDesc描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServerType() 获取服务器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServerType(string $SourceServerType) 设置服务器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServerType() 获取目标服务器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServerType(string $TargetServerType) 设置目标服务器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunJarName() 获取RunJarName名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunJarName(string $RunJarName) 设置RunJarName名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKillAble() 获取Killable参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKillAble(integer $KillAble) 设置Killable参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTypeSort() 获取TypeSort类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeSort(string $TypeSort) 设置TypeSort类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取InCharge参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置InCharge参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBrokerParallelism() 获取节点对应任务类型运行上限（暂时不考虑）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerParallelism(integer $BrokerParallelism) 设置节点对应任务类型运行上限（暂时不考虑）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskParallelism() 获取每个任务运行上限（暂时不考虑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskParallelism(integer $TaskParallelism) 设置每个任务运行上限（暂时不考虑
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDoRedoParallelism() 获取补录和重跑上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoRedoParallelism(integer $DoRedoParallelism) 设置补录和重跑上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDowngradePriorityTries() 获取0 为不可创建任务; >0 可创建任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDowngradePriorityTries(integer $DowngradePriorityTries) 设置0 为不可创建任务; >0 可创建任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取重试等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWait(integer $RetryWait) 设置重试等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryLimit() 获取重试次数（在任务属性配置中设置）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryLimit(integer $RetryLimit) 设置重试次数（在任务属性配置中设置）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefaultAliveWait() 获取DefaultAliveWait参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultAliveWait(integer $DefaultAliveWait) 设置DefaultAliveWait参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPollingSeconds() 获取PollingSeconds秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPollingSeconds(integer $PollingSeconds) 设置PollingSeconds秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamList() 获取参数列表xml
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamList(string $ParamList) 设置参数列表xml
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskTypeExtension() 获取TaskTypeExts参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeExtension(array $TaskTypeExtension) 设置TaskTypeExts参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取对应文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置对应文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSelectFilePath() 获取是否选择脚本路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectFilePath(boolean $SelectFilePath) 设置是否选择脚本路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExcludeCommonLib() 获取classpath是否要排除掉common-lib，默认是0不排除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludeCommonLib(boolean $ExcludeCommonLib) 设置classpath是否要排除掉common-lib，默认是0不排除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostHooks() 获取runner任务完成后需要触发的hook
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostHooks(string $PostHooks) 设置runner任务完成后需要触发的hook
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskTypeDsVO extends AbstractModel
{
    /**
     * @var integer 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeId;

    /**
     * @var string TypeDesc描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeDesc;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 服务器类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServerType;

    /**
     * @var string 目标服务器类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServerType;

    /**
     * @var string RunJarName名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunJarName;

    /**
     * @var integer Killable参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KillAble;

    /**
     * @var string TypeSort类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeSort;

    /**
     * @var string InCharge参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var integer 节点对应任务类型运行上限（暂时不考虑）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerParallelism;

    /**
     * @var integer 每个任务运行上限（暂时不考虑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskParallelism;

    /**
     * @var integer 补录和重跑上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoRedoParallelism;

    /**
     * @var integer 0 为不可创建任务; >0 可创建任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DowngradePriorityTries;

    /**
     * @var integer 重试等待时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryWait;

    /**
     * @var integer 重试次数（在任务属性配置中设置）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryLimit;

    /**
     * @var integer DefaultAliveWait参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultAliveWait;

    /**
     * @var integer PollingSeconds秒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PollingSeconds;

    /**
     * @var string 参数列表xml
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamList;

    /**
     * @var array TaskTypeExts参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeExtension;

    /**
     * @var string 对应文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var boolean 是否选择脚本路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectFilePath;

    /**
     * @var boolean classpath是否要排除掉common-lib，默认是0不排除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludeCommonLib;

    /**
     * @var string runner任务完成后需要触发的hook
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostHooks;

    /**
     * @param integer $TypeId 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TypeDesc TypeDesc描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServerType 服务器类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServerType 目标服务器类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunJarName RunJarName名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KillAble Killable参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TypeSort TypeSort类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge InCharge参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BrokerParallelism 节点对应任务类型运行上限（暂时不考虑）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskParallelism 每个任务运行上限（暂时不考虑
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DoRedoParallelism 补录和重跑上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DowngradePriorityTries 0 为不可创建任务; >0 可创建任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait 重试等待时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryLimit 重试次数（在任务属性配置中设置）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefaultAliveWait DefaultAliveWait参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PollingSeconds PollingSeconds秒数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamList 参数列表xml
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskTypeExtension TaskTypeExts参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 对应文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SelectFilePath 是否选择脚本路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExcludeCommonLib classpath是否要排除掉common-lib，默认是0不排除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostHooks runner任务完成后需要触发的hook
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TypeDesc",$param) and $param["TypeDesc"] !== null) {
            $this->TypeDesc = $param["TypeDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SourceServerType",$param) and $param["SourceServerType"] !== null) {
            $this->SourceServerType = $param["SourceServerType"];
        }

        if (array_key_exists("TargetServerType",$param) and $param["TargetServerType"] !== null) {
            $this->TargetServerType = $param["TargetServerType"];
        }

        if (array_key_exists("RunJarName",$param) and $param["RunJarName"] !== null) {
            $this->RunJarName = $param["RunJarName"];
        }

        if (array_key_exists("KillAble",$param) and $param["KillAble"] !== null) {
            $this->KillAble = $param["KillAble"];
        }

        if (array_key_exists("TypeSort",$param) and $param["TypeSort"] !== null) {
            $this->TypeSort = $param["TypeSort"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("BrokerParallelism",$param) and $param["BrokerParallelism"] !== null) {
            $this->BrokerParallelism = $param["BrokerParallelism"];
        }

        if (array_key_exists("TaskParallelism",$param) and $param["TaskParallelism"] !== null) {
            $this->TaskParallelism = $param["TaskParallelism"];
        }

        if (array_key_exists("DoRedoParallelism",$param) and $param["DoRedoParallelism"] !== null) {
            $this->DoRedoParallelism = $param["DoRedoParallelism"];
        }

        if (array_key_exists("DowngradePriorityTries",$param) and $param["DowngradePriorityTries"] !== null) {
            $this->DowngradePriorityTries = $param["DowngradePriorityTries"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("RetryLimit",$param) and $param["RetryLimit"] !== null) {
            $this->RetryLimit = $param["RetryLimit"];
        }

        if (array_key_exists("DefaultAliveWait",$param) and $param["DefaultAliveWait"] !== null) {
            $this->DefaultAliveWait = $param["DefaultAliveWait"];
        }

        if (array_key_exists("PollingSeconds",$param) and $param["PollingSeconds"] !== null) {
            $this->PollingSeconds = $param["PollingSeconds"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = $param["ParamList"];
        }

        if (array_key_exists("TaskTypeExtension",$param) and $param["TaskTypeExtension"] !== null) {
            $this->TaskTypeExtension = [];
            foreach ($param["TaskTypeExtension"] as $key => $value){
                $obj = new TaskTypeExtParamDsVO();
                $obj->deserialize($value);
                array_push($this->TaskTypeExtension, $obj);
            }
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("SelectFilePath",$param) and $param["SelectFilePath"] !== null) {
            $this->SelectFilePath = $param["SelectFilePath"];
        }

        if (array_key_exists("ExcludeCommonLib",$param) and $param["ExcludeCommonLib"] !== null) {
            $this->ExcludeCommonLib = $param["ExcludeCommonLib"];
        }

        if (array_key_exists("PostHooks",$param) and $param["PostHooks"] !== null) {
            $this->PostHooks = $param["PostHooks"];
        }
    }
}
