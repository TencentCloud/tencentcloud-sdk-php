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
 * CreateEdrLessAlertExportJob请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>MachineName  主机名称InstanceID  实例ID  IP   内网IP或公网IP - 是否必填：否 - 主机Ip或别名筛选HostId - String - 是否必填：否 - 主机IdAgentId - String - 是否必填：否 - 客户端IdPolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任BeginTime - String - 是否必填：否 - 最近访问开始时间EndTime - String - 是否必填：否 - 最近访问结束时间</p>
 * @method void setFilters(array $Filters) 设置<p>MachineName  主机名称InstanceID  实例ID  IP   内网IP或公网IP - 是否必填：否 - 主机Ip或别名筛选HostId - String - 是否必填：否 - 主机IdAgentId - String - 是否必填：否 - 客户端IdPolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任BeginTime - String - 是否必填：否 - 最近访问开始时间EndTime - String - 是否必填：否 - 最近访问结束时间</p>
 * @method string getOrder() 获取<p>排序方式：[ASC:升序|DESC:降序]</p>
 * @method void setOrder(string $Order) 设置<p>排序方式：[ASC:升序|DESC:降序]</p>
 * @method string getBy() 获取<p>排序字段：[ LatestDetectTime:最近请求时间]</p>
 * @method void setBy(string $By) 设置<p>排序字段：[ LatestDetectTime:最近请求时间]</p>
 */
class CreateEdrLessAlertExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>MachineName  主机名称InstanceID  实例ID  IP   内网IP或公网IP - 是否必填：否 - 主机Ip或别名筛选HostId - String - 是否必填：否 - 主机IdAgentId - String - 是否必填：否 - 客户端IdPolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任BeginTime - String - 是否必填：否 - 最近访问开始时间EndTime - String - 是否必填：否 - 最近访问结束时间</p>
     */
    public $Filters;

    /**
     * @var string <p>排序方式：[ASC:升序|DESC:降序]</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段：[ LatestDetectTime:最近请求时间]</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>MachineName  主机名称InstanceID  实例ID  IP   内网IP或公网IP - 是否必填：否 - 主机Ip或别名筛选HostId - String - 是否必填：否 - 主机IdAgentId - String - 是否必填：否 - 客户端IdPolicyType - String - 是否必填：否 - 策略类型,0:系统策略1:用户自定义策略Domain - String - 是否必填：否 - 域名(先对域名做urlencode,再base64)HandleStatus - String - 是否必填：否 - 状态筛选0:待处理；2:信任；3:不信任BeginTime - String - 是否必填：否 - 最近访问开始时间EndTime - String - 是否必填：否 - 最近访问结束时间</p>
     * @param string $Order <p>排序方式：[ASC:升序|DESC:降序]</p>
     * @param string $By <p>排序字段：[ LatestDetectTime:最近请求时间]</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
