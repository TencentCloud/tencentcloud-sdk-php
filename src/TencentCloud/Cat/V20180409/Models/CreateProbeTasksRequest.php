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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProbeTasks请求参数结构体
 *
 * @method array getBatchTasks() 获取批量任务名-地址
 * @method void setBatchTasks(array $BatchTasks) 设置批量任务名-地址
 * @method integer getTaskType() 获取任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois
 * @method void setTaskType(integer $TaskType) 设置任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois
 * @method array getNodes() 获取拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。
 * @method void setNodes(array $Nodes) 设置拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。
 * @method integer getInterval() 获取拨测间隔
 * @method void setInterval(integer $Interval) 设置拨测间隔
 * @method string getParameters() 获取拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。
 * @method void setParameters(string $Parameters) 设置拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。
 * @method integer getTaskCategory() 获取任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
 * @method void setTaskCategory(integer $TaskCategory) 设置任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
 * @method string getCron() 获取定时任务cron表达式
 * @method void setCron(string $Cron) 设置定时任务cron表达式
 * @method array getTag() 获取资源标签值
 * @method void setTag(array $Tag) 设置资源标签值
 * @method integer getProbeType() 获取测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
 * @method void setProbeType(integer $ProbeType) 设置测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
 * @method string getPluginSource() 获取插件类型，如CDN，详情参考云拨测官方文档。
 * @method void setPluginSource(string $PluginSource) 设置插件类型，如CDN，详情参考云拨测官方文档。
 * @method string getClientNum() 获取客户端ID
 * @method void setClientNum(string $ClientNum) 设置客户端ID
 * @method integer getNodeIpType() 获取拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6
 * @method void setNodeIpType(integer $NodeIpType) 设置拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6
 */
class CreateProbeTasksRequest extends AbstractModel
{
    /**
     * @var array 批量任务名-地址
     */
    public $BatchTasks;

    /**
     * @var integer 任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois
     */
    public $TaskType;

    /**
     * @var array 拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。
     */
    public $Nodes;

    /**
     * @var integer 拨测间隔
     */
    public $Interval;

    /**
     * @var string 拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。
     */
    public $Parameters;

    /**
     * @var integer 任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
     */
    public $TaskCategory;

    /**
     * @var string 定时任务cron表达式
     */
    public $Cron;

    /**
     * @var array 资源标签值
     */
    public $Tag;

    /**
     * @var integer 测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
     */
    public $ProbeType;

    /**
     * @var string 插件类型，如CDN，详情参考云拨测官方文档。
     */
    public $PluginSource;

    /**
     * @var string 客户端ID
     */
    public $ClientNum;

    /**
     * @var integer 拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6
     */
    public $NodeIpType;

    /**
     * @param array $BatchTasks 批量任务名-地址
     * @param integer $TaskType 任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois
     * @param array $Nodes 拨测节点，如10001，具体拨测地域运营商对应的拨测点编号可联系云拨测确认。
     * @param integer $Interval 拨测间隔
     * @param string $Parameters 拨测参数，详细可参考云拨测官方文档,链接:https://cloud.tencent.com/document/product/248/87308#createprobetasks。
     * @param integer $TaskCategory 任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
     * @param string $Cron 定时任务cron表达式
     * @param array $Tag 资源标签值
     * @param integer $ProbeType 测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
     * @param string $PluginSource 插件类型，如CDN，详情参考云拨测官方文档。
     * @param string $ClientNum 客户端ID
     * @param integer $NodeIpType 拨测点IP类型：0-不限制IP类型，1-IPv4，2-IPv6
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
    }
}
