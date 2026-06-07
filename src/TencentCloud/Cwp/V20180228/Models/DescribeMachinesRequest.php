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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachines请求参数结构体
 *
 * @method string getMachineType() 获取<p>机器所属专区类型<br>CVM 云服务器<br>BM 黑石<br>ECM 边缘计算<br>LH 轻量应用服务器<br>Other 混合云专区</p>
 * @method void setMachineType(string $MachineType) 设置<p>机器所属专区类型<br>CVM 云服务器<br>BM 黑石<br>ECM 边缘计算<br>LH 轻量应用服务器<br>Other 混合云专区</p>
 * @method string getMachineRegion() 获取<p>机器所属地域。如：ap-guangzhou，ap-shanghai，非腾讯云主机使用：ap-others</p>
 * @method void setMachineRegion(string $MachineRegion) 设置<p>机器所属地域。如：ap-guangzhou，ap-shanghai，非腾讯云主机使用：ap-others</p>
 * @method integer getLimit() 获取<p>返回数量，默认为10，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为10，最大值为100。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method array getFilters() 获取<p>过滤条件。</p><li>Ips - String - 是否必填：否 - 通过ip查询 </li><li>Names - String - 是否必填：否 - 通过实例名查询 </li><li>InstanceIds - String - 是否必填：否 - 通过实例id查询 </li><li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版）</li><li>Risk - String 是否必填: 否 - 风险主机( yes ) </li><li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )每个过滤条件只支持一个值，暂不支持多个值“或”关系查询</li><li>Quuid - String - 是否必填: 否 - 云服务器uuid  最大100条.</li><li>AddedOnTheFifteen- String 是否必填: 否 - 是否只查询15天内新增的主机( 1：是) </li><li> TagId- String 是否必填: 否 - 查询指定标签关联的主机列表 </li><li> AgentStatus- String 是否必填: 否 - ALL 全部; ONLINE 防护中; OFFLINE 已离线;UNINSTALLED 未安装</li><li> MachineStatus- String 是否必填: 否 - ALL 全部; RUNNING 运行中; STOPPED 已关机; EXPIRED 待回收</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。</p><li>Ips - String - 是否必填：否 - 通过ip查询 </li><li>Names - String - 是否必填：否 - 通过实例名查询 </li><li>InstanceIds - String - 是否必填：否 - 通过实例id查询 </li><li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版）</li><li>Risk - String 是否必填: 否 - 风险主机( yes ) </li><li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )每个过滤条件只支持一个值，暂不支持多个值“或”关系查询</li><li>Quuid - String - 是否必填: 否 - 云服务器uuid  最大100条.</li><li>AddedOnTheFifteen- String 是否必填: 否 - 是否只查询15天内新增的主机( 1：是) </li><li> TagId- String 是否必填: 否 - 查询指定标签关联的主机列表 </li><li> AgentStatus- String 是否必填: 否 - ALL 全部; ONLINE 防护中; OFFLINE 已离线;UNINSTALLED 未安装</li><li> MachineStatus- String 是否必填: 否 - ALL 全部; RUNNING 运行中; STOPPED 已关机; EXPIRED 待回收</li>
 * @method array getProjectIds() 获取<p>机器所属业务ID列表</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>机器所属业务ID列表</p>
 * @method integer getMachineAppId() 获取<p>机器对应的APPID</p>
 * @method void setMachineAppId(integer $MachineAppId) 设置<p>机器对应的APPID</p>
 */
class DescribeMachinesRequest extends AbstractModel
{
    /**
     * @var string <p>机器所属专区类型<br>CVM 云服务器<br>BM 黑石<br>ECM 边缘计算<br>LH 轻量应用服务器<br>Other 混合云专区</p>
     */
    public $MachineType;

    /**
     * @var string <p>机器所属地域。如：ap-guangzhou，ap-shanghai，非腾讯云主机使用：ap-others</p>
     */
    public $MachineRegion;

    /**
     * @var integer <p>返回数量，默认为10，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件。</p><li>Ips - String - 是否必填：否 - 通过ip查询 </li><li>Names - String - 是否必填：否 - 通过实例名查询 </li><li>InstanceIds - String - 是否必填：否 - 通过实例id查询 </li><li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版）</li><li>Risk - String 是否必填: 否 - 风险主机( yes ) </li><li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )每个过滤条件只支持一个值，暂不支持多个值“或”关系查询</li><li>Quuid - String - 是否必填: 否 - 云服务器uuid  最大100条.</li><li>AddedOnTheFifteen- String 是否必填: 否 - 是否只查询15天内新增的主机( 1：是) </li><li> TagId- String 是否必填: 否 - 查询指定标签关联的主机列表 </li><li> AgentStatus- String 是否必填: 否 - ALL 全部; ONLINE 防护中; OFFLINE 已离线;UNINSTALLED 未安装</li><li> MachineStatus- String 是否必填: 否 - ALL 全部; RUNNING 运行中; STOPPED 已关机; EXPIRED 待回收</li>
     */
    public $Filters;

    /**
     * @var array <p>机器所属业务ID列表</p>
     */
    public $ProjectIds;

    /**
     * @var integer <p>机器对应的APPID</p>
     */
    public $MachineAppId;

    /**
     * @param string $MachineType <p>机器所属专区类型<br>CVM 云服务器<br>BM 黑石<br>ECM 边缘计算<br>LH 轻量应用服务器<br>Other 混合云专区</p>
     * @param string $MachineRegion <p>机器所属地域。如：ap-guangzhou，ap-shanghai，非腾讯云主机使用：ap-others</p>
     * @param integer $Limit <p>返回数量，默认为10，最大值为100。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param array $Filters <p>过滤条件。</p><li>Ips - String - 是否必填：否 - 通过ip查询 </li><li>Names - String - 是否必填：否 - 通过实例名查询 </li><li>InstanceIds - String - 是否必填：否 - 通过实例id查询 </li><li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版）</li><li>Risk - String 是否必填: 否 - 风险主机( yes ) </li><li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )每个过滤条件只支持一个值，暂不支持多个值“或”关系查询</li><li>Quuid - String - 是否必填: 否 - 云服务器uuid  最大100条.</li><li>AddedOnTheFifteen- String 是否必填: 否 - 是否只查询15天内新增的主机( 1：是) </li><li> TagId- String 是否必填: 否 - 查询指定标签关联的主机列表 </li><li> AgentStatus- String 是否必填: 否 - ALL 全部; ONLINE 防护中; OFFLINE 已离线;UNINSTALLED 未安装</li><li> MachineStatus- String 是否必填: 否 - ALL 全部; RUNNING 运行中; STOPPED 已关机; EXPIRED 待回收</li>
     * @param array $ProjectIds <p>机器所属业务ID列表</p>
     * @param integer $MachineAppId <p>机器对应的APPID</p>
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("MachineAppId",$param) and $param["MachineAppId"] !== null) {
            $this->MachineAppId = $param["MachineAppId"];
        }
    }
}
