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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCopyPairs请求参数结构体
 *
 * @method string getCopyPairType() 获取<p>要查询复制对的类型，可选值：DISK、INSTANCE、CFS</p>
 * @method void setCopyPairType(string $CopyPairType) 设置<p>要查询复制对的类型，可选值：DISK、INSTANCE、CFS</p>
 * @method array getCopyPairIds() 获取<p>要查询复制对ID列表</p>
 * @method void setCopyPairIds(array $CopyPairIds) 设置<p>要查询复制对ID列表</p>
 * @method array getFilters() 获取<p>过滤条件，详见过滤条件表。支持的Name：disaster-recovery-site-pair-id、target-resource-id、source-resource-id、copy-pair-id、copy-pair-name</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，详见过滤条件表。支持的Name：disaster-recovery-site-pair-id、target-resource-id、source-resource-id、copy-pair-id、copy-pair-name</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method string getOrder() 获取<p>输出结果按升序还是降序，可选值：ASC、DESC</p>
 * @method void setOrder(string $Order) 设置<p>输出结果按升序还是降序，可选值：ASC、DESC</p>
 * @method string getOrderField() 获取<p>输出结果的排序字段，可选值：CREATE_TIME</p>
 * @method void setOrderField(string $OrderField) 设置<p>输出结果的排序字段，可选值：CREATE_TIME</p>
 * @method boolean getQueryProtectionTime() 获取<p>是否要查询保护时间点列表，默认 false。当设置为 true 时，必须同时传入 CopyPairIds 参数。</p>
 * @method void setQueryProtectionTime(boolean $QueryProtectionTime) 设置<p>是否要查询保护时间点列表，默认 false。当设置为 true 时，必须同时传入 CopyPairIds 参数。</p>
 * @method boolean getGetAllCopyPair() 获取<p>是否查询跨云+非跨云全部复制对，默认 false</p>
 * @method void setGetAllCopyPair(boolean $GetAllCopyPair) 设置<p>是否查询跨云+非跨云全部复制对，默认 false</p>
 * @method boolean getQueryCvmCreateParams() 获取<p>是否要查询 CVM 创建参数（仅对延迟创建模式且目标 CVM 未创建的复制对生效），默认为true。为 true 时，每条 deferred_create=1 AND target_cvm_created=0 的 CVM 复制对出参会附带 CvmCreateParams 字段</p>
 * @method void setQueryCvmCreateParams(boolean $QueryCvmCreateParams) 设置<p>是否要查询 CVM 创建参数（仅对延迟创建模式且目标 CVM 未创建的复制对生效），默认为true。为 true 时，每条 deferred_create=1 AND target_cvm_created=0 的 CVM 复制对出参会附带 CvmCreateParams 字段</p>
 * @method string getCreateFrom() 获取<p>复制对创建来源过滤。不传则查询所有；传 LOCAL 仅查本端创建的复制对，传 PEER 仅查对端创建的复制对。</p><p>枚举值：</p><ul><li>LOCAL： 仅查本端创建的复制对</li><li>PEER： 仅查对端创建的复制对</li></ul>
 * @method void setCreateFrom(string $CreateFrom) 设置<p>复制对创建来源过滤。不传则查询所有；传 LOCAL 仅查本端创建的复制对，传 PEER 仅查对端创建的复制对。</p><p>枚举值：</p><ul><li>LOCAL： 仅查本端创建的复制对</li><li>PEER： 仅查对端创建的复制对</li></ul>
 */
class DescribeCopyPairsRequest extends AbstractModel
{
    /**
     * @var string <p>要查询复制对的类型，可选值：DISK、INSTANCE、CFS</p>
     */
    public $CopyPairType;

    /**
     * @var array <p>要查询复制对ID列表</p>
     */
    public $CopyPairIds;

    /**
     * @var array <p>过滤条件，详见过滤条件表。支持的Name：disaster-recovery-site-pair-id、target-resource-id、source-resource-id、copy-pair-id、copy-pair-name</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var string <p>输出结果按升序还是降序，可选值：ASC、DESC</p>
     */
    public $Order;

    /**
     * @var string <p>输出结果的排序字段，可选值：CREATE_TIME</p>
     */
    public $OrderField;

    /**
     * @var boolean <p>是否要查询保护时间点列表，默认 false。当设置为 true 时，必须同时传入 CopyPairIds 参数。</p>
     */
    public $QueryProtectionTime;

    /**
     * @var boolean <p>是否查询跨云+非跨云全部复制对，默认 false</p>
     */
    public $GetAllCopyPair;

    /**
     * @var boolean <p>是否要查询 CVM 创建参数（仅对延迟创建模式且目标 CVM 未创建的复制对生效），默认为true。为 true 时，每条 deferred_create=1 AND target_cvm_created=0 的 CVM 复制对出参会附带 CvmCreateParams 字段</p>
     */
    public $QueryCvmCreateParams;

    /**
     * @var string <p>复制对创建来源过滤。不传则查询所有；传 LOCAL 仅查本端创建的复制对，传 PEER 仅查对端创建的复制对。</p><p>枚举值：</p><ul><li>LOCAL： 仅查本端创建的复制对</li><li>PEER： 仅查对端创建的复制对</li></ul>
     */
    public $CreateFrom;

    /**
     * @param string $CopyPairType <p>要查询复制对的类型，可选值：DISK、INSTANCE、CFS</p>
     * @param array $CopyPairIds <p>要查询复制对ID列表</p>
     * @param array $Filters <p>过滤条件，详见过滤条件表。支持的Name：disaster-recovery-site-pair-id、target-resource-id、source-resource-id、copy-pair-id、copy-pair-name</p>
     * @param integer $Offset <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param string $Order <p>输出结果按升序还是降序，可选值：ASC、DESC</p>
     * @param string $OrderField <p>输出结果的排序字段，可选值：CREATE_TIME</p>
     * @param boolean $QueryProtectionTime <p>是否要查询保护时间点列表，默认 false。当设置为 true 时，必须同时传入 CopyPairIds 参数。</p>
     * @param boolean $GetAllCopyPair <p>是否查询跨云+非跨云全部复制对，默认 false</p>
     * @param boolean $QueryCvmCreateParams <p>是否要查询 CVM 创建参数（仅对延迟创建模式且目标 CVM 未创建的复制对生效），默认为true。为 true 时，每条 deferred_create=1 AND target_cvm_created=0 的 CVM 复制对出参会附带 CvmCreateParams 字段</p>
     * @param string $CreateFrom <p>复制对创建来源过滤。不传则查询所有；传 LOCAL 仅查本端创建的复制对，传 PEER 仅查对端创建的复制对。</p><p>枚举值：</p><ul><li>LOCAL： 仅查本端创建的复制对</li><li>PEER： 仅查对端创建的复制对</li></ul>
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
        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }

        if (array_key_exists("CopyPairIds",$param) and $param["CopyPairIds"] !== null) {
            $this->CopyPairIds = $param["CopyPairIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterModel();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("QueryProtectionTime",$param) and $param["QueryProtectionTime"] !== null) {
            $this->QueryProtectionTime = $param["QueryProtectionTime"];
        }

        if (array_key_exists("GetAllCopyPair",$param) and $param["GetAllCopyPair"] !== null) {
            $this->GetAllCopyPair = $param["GetAllCopyPair"];
        }

        if (array_key_exists("QueryCvmCreateParams",$param) and $param["QueryCvmCreateParams"] !== null) {
            $this->QueryCvmCreateParams = $param["QueryCvmCreateParams"];
        }

        if (array_key_exists("CreateFrom",$param) and $param["CreateFrom"] !== null) {
            $this->CreateFrom = $param["CreateFrom"];
        }
    }
}
