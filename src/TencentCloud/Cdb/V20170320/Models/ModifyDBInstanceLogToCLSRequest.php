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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceLogToCLS请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method string getLogType() 获取<p>日志类型。error：错误日志，slowlog：慢日志。</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型。error：错误日志，slowlog：慢日志。</p>
 * @method string getStatus() 获取<p>投递状态。ON：开启，OFF：关闭。</p>
 * @method void setStatus(string $Status) 设置<p>投递状态。ON：开启，OFF：关闭。</p>
 * @method boolean getCreateLogset() 获取<p>是否需要创建日志集。默认为 false。</p>
 * @method void setCreateLogset(boolean $CreateLogset) 设置<p>是否需要创建日志集。默认为 false。</p>
 * @method string getLogset() 获取<p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
 * @method void setLogset(string $Logset) 设置<p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
 * @method boolean getCreateLogTopic() 获取<p>是否需要创建日志主题。默认为 false。</p>
 * @method void setCreateLogTopic(boolean $CreateLogTopic) 设置<p>是否需要创建日志主题。默认为 false。</p>
 * @method string getLogTopic() 获取<p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
 * @method void setLogTopic(string $LogTopic) 设置<p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
 * @method integer getPeriod() 获取<p>日志主题有效期，不填写时，默认30天，最大值3600。</p>
 * @method void setPeriod(integer $Period) 设置<p>日志主题有效期，不填写时，默认30天，最大值3600。</p>
 * @method boolean getCreateIndex() 获取<p>创建日志主题时，是否创建索引，默认为 false。</p>
 * @method void setCreateIndex(boolean $CreateIndex) 设置<p>创建日志主题时，是否创建索引，默认为 false。</p>
 * @method string getClsRegion() 获取<p>CLS 所在地域，不填择默认为 Region 的参数值。</p>
 * @method void setClsRegion(string $ClsRegion) 设置<p>CLS 所在地域，不填择默认为 Region 的参数值。</p>
 * @method array getResourceTags() 获取<p>创建日志集和日志主题的时候可选，最多不能超过10个标签</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>创建日志集和日志主题的时候可选，最多不能超过10个标签</p>
 */
class ModifyDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型。error：错误日志，slowlog：慢日志。</p>
     */
    public $LogType;

    /**
     * @var string <p>投递状态。ON：开启，OFF：关闭。</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否需要创建日志集。默认为 false。</p>
     */
    public $CreateLogset;

    /**
     * @var string <p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
     */
    public $Logset;

    /**
     * @var boolean <p>是否需要创建日志主题。默认为 false。</p>
     */
    public $CreateLogTopic;

    /**
     * @var string <p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
     */
    public $LogTopic;

    /**
     * @var integer <p>日志主题有效期，不填写时，默认30天，最大值3600。</p>
     */
    public $Period;

    /**
     * @var boolean <p>创建日志主题时，是否创建索引，默认为 false。</p>
     */
    public $CreateIndex;

    /**
     * @var string <p>CLS 所在地域，不填择默认为 Region 的参数值。</p>
     */
    public $ClsRegion;

    /**
     * @var array <p>创建日志集和日志主题的时候可选，最多不能超过10个标签</p>
     */
    public $ResourceTags;

    /**
     * @param string $InstanceId <p>实例 ID，可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     * @param string $LogType <p>日志类型。error：错误日志，slowlog：慢日志。</p>
     * @param string $Status <p>投递状态。ON：开启，OFF：关闭。</p>
     * @param boolean $CreateLogset <p>是否需要创建日志集。默认为 false。</p>
     * @param string $Logset <p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
     * @param boolean $CreateLogTopic <p>是否需要创建日志主题。默认为 false。</p>
     * @param string $LogTopic <p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。<br>说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。</p>
     * @param integer $Period <p>日志主题有效期，不填写时，默认30天，最大值3600。</p>
     * @param boolean $CreateIndex <p>创建日志主题时，是否创建索引，默认为 false。</p>
     * @param string $ClsRegion <p>CLS 所在地域，不填择默认为 Region 的参数值。</p>
     * @param array $ResourceTags <p>创建日志集和日志主题的时候可选，最多不能超过10个标签</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateLogset",$param) and $param["CreateLogset"] !== null) {
            $this->CreateLogset = $param["CreateLogset"];
        }

        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = $param["Logset"];
        }

        if (array_key_exists("CreateLogTopic",$param) and $param["CreateLogTopic"] !== null) {
            $this->CreateLogTopic = $param["CreateLogTopic"];
        }

        if (array_key_exists("LogTopic",$param) and $param["LogTopic"] !== null) {
            $this->LogTopic = $param["LogTopic"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CreateIndex",$param) and $param["CreateIndex"] !== null) {
            $this->CreateIndex = $param["CreateIndex"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoItem();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
