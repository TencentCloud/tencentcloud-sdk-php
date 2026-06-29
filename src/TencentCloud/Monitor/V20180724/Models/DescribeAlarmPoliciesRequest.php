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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmPolicies请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method integer getPageNumber() 获取<p>页数，从 1 开始计数，默认 1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页数，从 1 开始计数，默认 1</p>
 * @method integer getPageSize() 获取<p>每页的数量，取值1~100，默认20</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页的数量，取值1~100，默认20</p>
 * @method string getPolicyName() 获取<p>按策略名称模糊搜索</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>按策略名称模糊搜索</p>
 * @method array getMonitorTypes() 获取<p>根据监控类型过滤 不选默认查所有类型 &quot;MT_QCE&quot;=云产品监控,当Dimension不为空时，该项为必填项</p>
 * @method void setMonitorTypes(array $MonitorTypes) 设置<p>根据监控类型过滤 不选默认查所有类型 &quot;MT_QCE&quot;=云产品监控,当Dimension不为空时，该项为必填项</p>
 * @method array getNamespaces() 获取<p>根据命名空间过滤，不同策略类型的值详见<br><a href="https://cloud.tencent.com/document/product/248/50397">策略类型列表</a>当Dimension不为空时，该项为必填项</p>
 * @method void setNamespaces(array $Namespaces) 设置<p>根据命名空间过滤，不同策略类型的值详见<br><a href="https://cloud.tencent.com/document/product/248/50397">策略类型列表</a>当Dimension不为空时，该项为必填项</p>
 * @method string getDimensions() 获取<p>告警对象列表，JSON 字符串。外层数组，对应多个实例，内层为对象的维度。例如“云服务器-基础监控”可写为：<code>[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-qr888845g&quot;}]]</code>具体也可以参考下方的示例 2。不同云产品参数示例详见 <a href="https://cloud.tencent.com/document/product/248/50397">维度信息Dimensions列表</a>注意：如果NeedCorrespondence传入1，即需要返回策略与实例对应关系，请传入不多于20个告警对象维度，否则容易请求超时</p>
 * @method void setDimensions(string $Dimensions) 设置<p>告警对象列表，JSON 字符串。外层数组，对应多个实例，内层为对象的维度。例如“云服务器-基础监控”可写为：<code>[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-qr888845g&quot;}]]</code>具体也可以参考下方的示例 2。不同云产品参数示例详见 <a href="https://cloud.tencent.com/document/product/248/50397">维度信息Dimensions列表</a>注意：如果NeedCorrespondence传入1，即需要返回策略与实例对应关系，请传入不多于20个告警对象维度，否则容易请求超时</p>
 * @method array getReceiverUids() 获取<p>根据接收人搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34587">拉取子用户 ListUsers</a> 接口获取用户列表 或 <a href="https://cloud.tencent.com/document/product/598/34590">查询子用户 GetUser</a> 接口查询子用户详情，此处填入返回结果中的 <code>Uid</code> 字段</p>
 * @method void setReceiverUids(array $ReceiverUids) 设置<p>根据接收人搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34587">拉取子用户 ListUsers</a> 接口获取用户列表 或 <a href="https://cloud.tencent.com/document/product/598/34590">查询子用户 GetUser</a> 接口查询子用户详情，此处填入返回结果中的 <code>Uid</code> 字段</p>
 * @method array getReceiverGroups() 获取<p>根据接收组搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34589">查询用户组列表 ListGroups</a> 接口获取用户组列表 或 <a href="https://cloud.tencent.com/document/product/598/34588">列出用户关联的用户组 ListGroupsForUser</a> 查询某个子用户所在的用户组列表 ，此处填入返回结果中的 <code>GroupId</code> 字段</p>
 * @method void setReceiverGroups(array $ReceiverGroups) 设置<p>根据接收组搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34589">查询用户组列表 ListGroups</a> 接口获取用户组列表 或 <a href="https://cloud.tencent.com/document/product/598/34588">列出用户关联的用户组 ListGroupsForUser</a> 查询某个子用户所在的用户组列表 ，此处填入返回结果中的 <code>GroupId</code> 字段</p>
 * @method array getPolicyType() 获取<p>根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略</p>
 * @method void setPolicyType(array $PolicyType) 设置<p>根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略</p>
 * @method string getField() 获取<p>排序字段，例如按照最后修改时间排序，Field: &quot;UpdateTime&quot;</p>
 * @method void setField(string $Field) 设置<p>排序字段，例如按照最后修改时间排序，Field: &quot;UpdateTime&quot;</p>
 * @method string getOrder() 获取<p>排序顺序：升序：ASC  降序：DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序顺序：升序：ASC  降序：DESC</p>
 * @method array getProjectIds() 获取<p>策略所属项目的id数组，可在此页面查看<br><a href="https://console.cloud.tencent.com/project">项目管理</a></p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>策略所属项目的id数组，可在此页面查看<br><a href="https://console.cloud.tencent.com/project">项目管理</a></p>
 * @method array getNoticeIds() 获取<p>通知模板的id列表，可查询通知模板列表获取。<br>可使用 <a href="https://cloud.tencent.com/document/product/248/51280">查询通知模板列表</a> 接口查询。</p>
 * @method void setNoticeIds(array $NoticeIds) 设置<p>通知模板的id列表，可查询通知模板列表获取。<br>可使用 <a href="https://cloud.tencent.com/document/product/248/51280">查询通知模板列表</a> 接口查询。</p>
 * @method array getRuleTypes() 获取<p>根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略</p>
 * @method void setRuleTypes(array $RuleTypes) 设置<p>根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略</p>
 * @method array getEnable() 获取<p>告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]</p>
 * @method void setEnable(array $Enable) 设置<p>告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]</p>
 * @method integer getNotBindingNoticeRule() 获取<p>传 1 查询未配置通知规则的告警策略；不传或传其他数值，查询所有策略。</p>
 * @method void setNotBindingNoticeRule(integer $NotBindingNoticeRule) 设置<p>传 1 查询未配置通知规则的告警策略；不传或传其他数值，查询所有策略。</p>
 * @method integer getInstanceGroupId() 获取<p>实例分组id</p>
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置<p>实例分组id</p>
 * @method integer getNeedCorrespondence() 获取<p>是否需要策略与入参过滤维度参数的对应关系，1：是  0：否，默认为0</p>
 * @method void setNeedCorrespondence(integer $NeedCorrespondence) 设置<p>是否需要策略与入参过滤维度参数的对应关系，1：是  0：否，默认为0</p>
 * @method array getTriggerTasks() 获取<p>按照触发任务（例如弹性伸缩）过滤策略。最多10个</p>
 * @method void setTriggerTasks(array $TriggerTasks) 设置<p>按照触发任务（例如弹性伸缩）过滤策略。最多10个</p>
 * @method array getOneClickPolicyType() 获取<p>根据一键告警策略筛选 不传展示全部策略 ONECLICK=展示一键告警策略 NOT_ONECLICK=展示非一键告警策略</p>
 * @method void setOneClickPolicyType(array $OneClickPolicyType) 设置<p>根据一键告警策略筛选 不传展示全部策略 ONECLICK=展示一键告警策略 NOT_ONECLICK=展示非一键告警策略</p>
 * @method integer getNotBindAll() 获取<p>返回结果过滤掉绑定全部对象的策略，1代表需要过滤，0则无需过滤</p>
 * @method void setNotBindAll(integer $NotBindAll) 设置<p>返回结果过滤掉绑定全部对象的策略，1代表需要过滤，0则无需过滤</p>
 * @method integer getNotInstanceGroup() 获取<p>返回结果过滤掉关联实例为实例分组的策略，1代表需要过滤，0则无需过滤</p>
 * @method void setNotInstanceGroup(integer $NotInstanceGroup) 设置<p>返回结果过滤掉关联实例为实例分组的策略，1代表需要过滤，0则无需过滤</p>
 * @method array getTags() 获取<p>策略根据标签过滤</p>
 * @method void setTags(array $Tags) 设置<p>策略根据标签过滤</p>
 * @method string getPromInsId() 获取<p>prom实例id，自定义指标策略时会用到</p>
 * @method void setPromInsId(string $PromInsId) 设置<p>prom实例id，自定义指标策略时会用到</p>
 * @method array getReceiverOnCallFormIDs() 获取<p>根据排班表搜索</p>
 * @method void setReceiverOnCallFormIDs(array $ReceiverOnCallFormIDs) 设置<p>根据排班表搜索</p>
 * @method array getNoticeContentTmplIDs() 获取<p>通知内容模板ID筛选</p>
 * @method void setNoticeContentTmplIDs(array $NoticeContentTmplIDs) 设置<p>通知内容模板ID筛选</p>
 * @method integer getIsPredefined() 获取<p>是否为预设策略，1是，0否</p>
 * @method void setIsPredefined(integer $IsPredefined) 设置<p>是否为预设策略，1是，0否</p>
 */
class DescribeAlarmPoliciesRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var integer <p>页数，从 1 开始计数，默认 1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页的数量，取值1~100，默认20</p>
     */
    public $PageSize;

    /**
     * @var string <p>按策略名称模糊搜索</p>
     */
    public $PolicyName;

    /**
     * @var array <p>根据监控类型过滤 不选默认查所有类型 &quot;MT_QCE&quot;=云产品监控,当Dimension不为空时，该项为必填项</p>
     */
    public $MonitorTypes;

    /**
     * @var array <p>根据命名空间过滤，不同策略类型的值详见<br><a href="https://cloud.tencent.com/document/product/248/50397">策略类型列表</a>当Dimension不为空时，该项为必填项</p>
     */
    public $Namespaces;

    /**
     * @var string <p>告警对象列表，JSON 字符串。外层数组，对应多个实例，内层为对象的维度。例如“云服务器-基础监控”可写为：<code>[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-qr888845g&quot;}]]</code>具体也可以参考下方的示例 2。不同云产品参数示例详见 <a href="https://cloud.tencent.com/document/product/248/50397">维度信息Dimensions列表</a>注意：如果NeedCorrespondence传入1，即需要返回策略与实例对应关系，请传入不多于20个告警对象维度，否则容易请求超时</p>
     */
    public $Dimensions;

    /**
     * @var array <p>根据接收人搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34587">拉取子用户 ListUsers</a> 接口获取用户列表 或 <a href="https://cloud.tencent.com/document/product/598/34590">查询子用户 GetUser</a> 接口查询子用户详情，此处填入返回结果中的 <code>Uid</code> 字段</p>
     */
    public $ReceiverUids;

    /**
     * @var array <p>根据接收组搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34589">查询用户组列表 ListGroups</a> 接口获取用户组列表 或 <a href="https://cloud.tencent.com/document/product/598/34588">列出用户关联的用户组 ListGroupsForUser</a> 查询某个子用户所在的用户组列表 ，此处填入返回结果中的 <code>GroupId</code> 字段</p>
     */
    public $ReceiverGroups;

    /**
     * @var array <p>根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略</p>
     */
    public $PolicyType;

    /**
     * @var string <p>排序字段，例如按照最后修改时间排序，Field: &quot;UpdateTime&quot;</p>
     */
    public $Field;

    /**
     * @var string <p>排序顺序：升序：ASC  降序：DESC</p>
     */
    public $Order;

    /**
     * @var array <p>策略所属项目的id数组，可在此页面查看<br><a href="https://console.cloud.tencent.com/project">项目管理</a></p>
     */
    public $ProjectIds;

    /**
     * @var array <p>通知模板的id列表，可查询通知模板列表获取。<br>可使用 <a href="https://cloud.tencent.com/document/product/248/51280">查询通知模板列表</a> 接口查询。</p>
     */
    public $NoticeIds;

    /**
     * @var array <p>根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略</p>
     */
    public $RuleTypes;

    /**
     * @var array <p>告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]</p>
     */
    public $Enable;

    /**
     * @var integer <p>传 1 查询未配置通知规则的告警策略；不传或传其他数值，查询所有策略。</p>
     */
    public $NotBindingNoticeRule;

    /**
     * @var integer <p>实例分组id</p>
     */
    public $InstanceGroupId;

    /**
     * @var integer <p>是否需要策略与入参过滤维度参数的对应关系，1：是  0：否，默认为0</p>
     */
    public $NeedCorrespondence;

    /**
     * @var array <p>按照触发任务（例如弹性伸缩）过滤策略。最多10个</p>
     */
    public $TriggerTasks;

    /**
     * @var array <p>根据一键告警策略筛选 不传展示全部策略 ONECLICK=展示一键告警策略 NOT_ONECLICK=展示非一键告警策略</p>
     */
    public $OneClickPolicyType;

    /**
     * @var integer <p>返回结果过滤掉绑定全部对象的策略，1代表需要过滤，0则无需过滤</p>
     */
    public $NotBindAll;

    /**
     * @var integer <p>返回结果过滤掉关联实例为实例分组的策略，1代表需要过滤，0则无需过滤</p>
     */
    public $NotInstanceGroup;

    /**
     * @var array <p>策略根据标签过滤</p>
     */
    public $Tags;

    /**
     * @var string <p>prom实例id，自定义指标策略时会用到</p>
     */
    public $PromInsId;

    /**
     * @var array <p>根据排班表搜索</p>
     */
    public $ReceiverOnCallFormIDs;

    /**
     * @var array <p>通知内容模板ID筛选</p>
     */
    public $NoticeContentTmplIDs;

    /**
     * @var integer <p>是否为预设策略，1是，0否</p>
     */
    public $IsPredefined;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param integer $PageNumber <p>页数，从 1 开始计数，默认 1</p>
     * @param integer $PageSize <p>每页的数量，取值1~100，默认20</p>
     * @param string $PolicyName <p>按策略名称模糊搜索</p>
     * @param array $MonitorTypes <p>根据监控类型过滤 不选默认查所有类型 &quot;MT_QCE&quot;=云产品监控,当Dimension不为空时，该项为必填项</p>
     * @param array $Namespaces <p>根据命名空间过滤，不同策略类型的值详见<br><a href="https://cloud.tencent.com/document/product/248/50397">策略类型列表</a>当Dimension不为空时，该项为必填项</p>
     * @param string $Dimensions <p>告警对象列表，JSON 字符串。外层数组，对应多个实例，内层为对象的维度。例如“云服务器-基础监控”可写为：<code>[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-qr888845g&quot;}]]</code>具体也可以参考下方的示例 2。不同云产品参数示例详见 <a href="https://cloud.tencent.com/document/product/248/50397">维度信息Dimensions列表</a>注意：如果NeedCorrespondence传入1，即需要返回策略与实例对应关系，请传入不多于20个告警对象维度，否则容易请求超时</p>
     * @param array $ReceiverUids <p>根据接收人搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34587">拉取子用户 ListUsers</a> 接口获取用户列表 或 <a href="https://cloud.tencent.com/document/product/598/34590">查询子用户 GetUser</a> 接口查询子用户详情，此处填入返回结果中的 <code>Uid</code> 字段</p>
     * @param array $ReceiverGroups <p>根据接收组搜索，可以使用“访问管理”的 <a href="https://cloud.tencent.com/document/product/598/34589">查询用户组列表 ListGroups</a> 接口获取用户组列表 或 <a href="https://cloud.tencent.com/document/product/598/34588">列出用户关联的用户组 ListGroupsForUser</a> 查询某个子用户所在的用户组列表 ，此处填入返回结果中的 <code>GroupId</code> 字段</p>
     * @param array $PolicyType <p>根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略</p>
     * @param string $Field <p>排序字段，例如按照最后修改时间排序，Field: &quot;UpdateTime&quot;</p>
     * @param string $Order <p>排序顺序：升序：ASC  降序：DESC</p>
     * @param array $ProjectIds <p>策略所属项目的id数组，可在此页面查看<br><a href="https://console.cloud.tencent.com/project">项目管理</a></p>
     * @param array $NoticeIds <p>通知模板的id列表，可查询通知模板列表获取。<br>可使用 <a href="https://cloud.tencent.com/document/product/248/51280">查询通知模板列表</a> 接口查询。</p>
     * @param array $RuleTypes <p>根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略</p>
     * @param array $Enable <p>告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]</p>
     * @param integer $NotBindingNoticeRule <p>传 1 查询未配置通知规则的告警策略；不传或传其他数值，查询所有策略。</p>
     * @param integer $InstanceGroupId <p>实例分组id</p>
     * @param integer $NeedCorrespondence <p>是否需要策略与入参过滤维度参数的对应关系，1：是  0：否，默认为0</p>
     * @param array $TriggerTasks <p>按照触发任务（例如弹性伸缩）过滤策略。最多10个</p>
     * @param array $OneClickPolicyType <p>根据一键告警策略筛选 不传展示全部策略 ONECLICK=展示一键告警策略 NOT_ONECLICK=展示非一键告警策略</p>
     * @param integer $NotBindAll <p>返回结果过滤掉绑定全部对象的策略，1代表需要过滤，0则无需过滤</p>
     * @param integer $NotInstanceGroup <p>返回结果过滤掉关联实例为实例分组的策略，1代表需要过滤，0则无需过滤</p>
     * @param array $Tags <p>策略根据标签过滤</p>
     * @param string $PromInsId <p>prom实例id，自定义指标策略时会用到</p>
     * @param array $ReceiverOnCallFormIDs <p>根据排班表搜索</p>
     * @param array $NoticeContentTmplIDs <p>通知内容模板ID筛选</p>
     * @param integer $IsPredefined <p>是否为预设策略，1是，0否</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MonitorTypes",$param) and $param["MonitorTypes"] !== null) {
            $this->MonitorTypes = $param["MonitorTypes"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("ReceiverUids",$param) and $param["ReceiverUids"] !== null) {
            $this->ReceiverUids = $param["ReceiverUids"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("RuleTypes",$param) and $param["RuleTypes"] !== null) {
            $this->RuleTypes = $param["RuleTypes"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("NotBindingNoticeRule",$param) and $param["NotBindingNoticeRule"] !== null) {
            $this->NotBindingNoticeRule = $param["NotBindingNoticeRule"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("NeedCorrespondence",$param) and $param["NeedCorrespondence"] !== null) {
            $this->NeedCorrespondence = $param["NeedCorrespondence"];
        }

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("OneClickPolicyType",$param) and $param["OneClickPolicyType"] !== null) {
            $this->OneClickPolicyType = $param["OneClickPolicyType"];
        }

        if (array_key_exists("NotBindAll",$param) and $param["NotBindAll"] !== null) {
            $this->NotBindAll = $param["NotBindAll"];
        }

        if (array_key_exists("NotInstanceGroup",$param) and $param["NotInstanceGroup"] !== null) {
            $this->NotInstanceGroup = $param["NotInstanceGroup"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PromInsId",$param) and $param["PromInsId"] !== null) {
            $this->PromInsId = $param["PromInsId"];
        }

        if (array_key_exists("ReceiverOnCallFormIDs",$param) and $param["ReceiverOnCallFormIDs"] !== null) {
            $this->ReceiverOnCallFormIDs = $param["ReceiverOnCallFormIDs"];
        }

        if (array_key_exists("NoticeContentTmplIDs",$param) and $param["NoticeContentTmplIDs"] !== null) {
            $this->NoticeContentTmplIDs = $param["NoticeContentTmplIDs"];
        }

        if (array_key_exists("IsPredefined",$param) and $param["IsPredefined"] !== null) {
            $this->IsPredefined = $param["IsPredefined"];
        }
    }
}
