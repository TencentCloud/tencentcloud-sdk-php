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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProbeTasks请求参数结构体
 *
 * @method array getBatchTasks() 获取<p>批量任务名-地址</p>
 * @method void setBatchTasks(array $BatchTasks) 设置<p>批量任务名-地址</p>
 * @method integer getTaskType() 获取<p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois</p>
 * @method void setTaskType(integer $TaskType) 设置<p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois</p>
 * @method array getNodes() 获取<p>拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。</p>
 * @method void setNodes(array $Nodes) 设置<p>拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。</p>
 * @method integer getInterval() 获取<p>拨测间隔，单位为分钟</p>
 * @method void setInterval(integer $Interval) 设置<p>拨测间隔，单位为分钟</p>
 * @method string getParameters() 获取<p>拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。</p>
 * @method void setParameters(string $Parameters) 设置<p>拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。</p>
 * @method integer getTaskCategory() 获取<p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
 * @method void setTaskCategory(integer $TaskCategory) 设置<p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
 * @method string getCron() 获取<p>定时任务cron表达式</p>
 * @method void setCron(string $Cron) 设置<p>定时任务cron表达式</p>
 * @method array getTag() 获取<p>资源标签值</p>
 * @method void setTag(array $Tag) 设置<p>资源标签值</p>
 * @method integer getProbeType() 获取<p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
 * @method void setProbeType(integer $ProbeType) 设置<p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
 * @method string getPluginSource() 获取<p>插件类型，如CDN，详情参考云拨测官方文档。</p>
 * @method void setPluginSource(string $PluginSource) 设置<p>插件类型，如CDN，详情参考云拨测官方文档。</p>
 * @method string getClientNum() 获取<p>客户端ID</p>
 * @method void setClientNum(string $ClientNum) 设置<p>客户端ID</p>
 * @method integer getNodeIpType() 获取<p>拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6</p>
 * @method void setNodeIpType(integer $NodeIpType) 设置<p>拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6</p>
 * @method integer getSubSyncFlag() 获取<p>供应商子账户同步标志</p>
 * @method void setSubSyncFlag(integer $SubSyncFlag) 设置<p>供应商子账户同步标志</p>
 * @method string getRtxName() 获取<p>创建者名称</p>
 * @method void setRtxName(string $RtxName) 设置<p>创建者名称</p>
 */
class CreateProbeTasksRequest extends AbstractModel
{
    /**
     * @var array <p>批量任务名-地址</p>
     */
    public $BatchTasks;

    /**
     * @var integer <p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois</p>
     */
    public $TaskType;

    /**
     * @var array <p>拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。</p>
     */
    public $Nodes;

    /**
     * @var integer <p>拨测间隔，单位为分钟</p>
     */
    public $Interval;

    /**
     * @var string <p>拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。</p>
     */
    public $Parameters;

    /**
     * @var integer <p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
     */
    public $TaskCategory;

    /**
     * @var string <p>定时任务cron表达式</p>
     */
    public $Cron;

    /**
     * @var array <p>资源标签值</p>
     */
    public $Tag;

    /**
     * @var integer <p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
     */
    public $ProbeType;

    /**
     * @var string <p>插件类型，如CDN，详情参考云拨测官方文档。</p>
     */
    public $PluginSource;

    /**
     * @var string <p>客户端ID</p>
     */
    public $ClientNum;

    /**
     * @var integer <p>拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6</p>
     */
    public $NodeIpType;

    /**
     * @var integer <p>供应商子账户同步标志</p>
     */
    public $SubSyncFlag;

    /**
     * @var string <p>创建者名称</p>
     */
    public $RtxName;

    /**
     * @param array $BatchTasks <p>批量任务名-地址</p>
     * @param integer $TaskType <p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois</p>
     * @param array $Nodes <p>拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。</p>
     * @param integer $Interval <p>拨测间隔，单位为分钟</p>
     * @param string $Parameters <p>拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。</p>
     * @param integer $TaskCategory <p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
     * @param string $Cron <p>定时任务cron表达式</p>
     * @param array $Tag <p>资源标签值</p>
     * @param integer $ProbeType <p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
     * @param string $PluginSource <p>插件类型，如CDN，详情参考云拨测官方文档。</p>
     * @param string $ClientNum <p>客户端ID</p>
     * @param integer $NodeIpType <p>拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6</p>
     * @param integer $SubSyncFlag <p>供应商子账户同步标志</p>
     * @param string $RtxName <p>创建者名称</p>
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
        if (array_key_exists("BatchTasks",$param) and $param["BatchTasks"] !== null) {
            $this->BatchTasks = [];
            foreach ($param["BatchTasks"] as $key => $value){
                $obj = new ProbeTaskBasicConfiguration();
                $obj->deserialize($value);
                array_push($this->BatchTasks, $obj);
            }
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("ProbeType",$param) and $param["ProbeType"] !== null) {
            $this->ProbeType = $param["ProbeType"];
        }

        if (array_key_exists("PluginSource",$param) and $param["PluginSource"] !== null) {
            $this->PluginSource = $param["PluginSource"];
        }

        if (array_key_exists("ClientNum",$param) and $param["ClientNum"] !== null) {
            $this->ClientNum = $param["ClientNum"];
        }

        if (array_key_exists("NodeIpType",$param) and $param["NodeIpType"] !== null) {
            $this->NodeIpType = $param["NodeIpType"];
        }

        if (array_key_exists("SubSyncFlag",$param) and $param["SubSyncFlag"] !== null) {
            $this->SubSyncFlag = $param["SubSyncFlag"];
        }

        if (array_key_exists("RtxName",$param) and $param["RtxName"] !== null) {
            $this->RtxName = $param["RtxName"];
        }
    }
}
