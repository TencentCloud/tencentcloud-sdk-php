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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预付费商品实例
 *
 * @method string getProductType() 获取<p>预付费商品实例类型，取值有：</p><li>StarterPackage：点播新手包。</li><li>MiniProgramPlugin：点播小程序插件。</li><li>ResourcePackage：点播资源包。</li>
 * @method void setProductType(string $ProductType) 设置<p>预付费商品实例类型，取值有：</p><li>StarterPackage：点播新手包。</li><li>MiniProgramPlugin：点播小程序插件。</li><li>ResourcePackage：点播资源包。</li>
 * @method string getStartTime() 获取<p>资源包实例起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setStartTime(string $StartTime) 设置<p>资源包实例起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getExpireTime() 获取<p>资源包实例过期日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>资源包实例过期日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getProductInstanceId() 获取<p>资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。</p>
 * @method void setProductInstanceId(string $ProductInstanceId) 设置<p>资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。</p>
 * @method string getLastConsumeDate() 获取<p>系统最近一次扣除资源包的日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setLastConsumeDate(string $LastConsumeDate) 设置<p>系统最近一次扣除资源包的日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method integer getBindStatus() 获取<p>资源包绑定 License 状态，取值有：</p><li>0：未绑定。</li><li>1：已绑定。</li>
 * @method void setBindStatus(integer $BindStatus) 设置<p>资源包绑定 License 状态，取值有：</p><li>0：未绑定。</li><li>1：已绑定。</li>
 * @method array getProductInstanceResourceSet() 获取<p>预付费资源包实例中包含的资源包列表。</p>
 * @method void setProductInstanceResourceSet(array $ProductInstanceResourceSet) 设置<p>预付费资源包实例中包含的资源包列表。</p>
 * @method array getResourceSet() 获取<p>预付费资源包实例中包含的资源包列表。</p>
 * @method void setResourceSet(array $ResourceSet) 设置<p>预付费资源包实例中包含的资源包列表。</p>
 * @method string getProductInstanceStatus() 获取<p>资源包实例的状态，取值有：</p><li>Effective：生效，可用于计费抵扣。</li><li>Isolated：隔离，不可用于计费抵扣。</li>
 * @method void setProductInstanceStatus(string $ProductInstanceStatus) 设置<p>资源包实例的状态，取值有：</p><li>Effective：生效，可用于计费抵扣。</li><li>Isolated：隔离，不可用于计费抵扣。</li>
 * @method string getRefundStatus() 获取<p>资源包实例的可退还状态，取值有：</p><li>FullRefund：可全额退款。</li><li>Denied：不可退款。</li>
 * @method void setRefundStatus(string $RefundStatus) 设置<p>资源包实例的可退还状态，取值有：</p><li>FullRefund：可全额退款。</li><li>Denied：不可退款。</li>
 * @method string getRenewStatus() 获取<p>自动续费状态，取值有：</p><li>Never：不自动续费。</li><li>Expire：到期自动续费。</li><li>ExpireOrUseOut：到期或用完自动续费。</li><li>NotSupport：不支持。</li>
 * @method void setRenewStatus(string $RenewStatus) 设置<p>自动续费状态，取值有：</p><li>Never：不自动续费。</li><li>Expire：到期自动续费。</li><li>ExpireOrUseOut：到期或用完自动续费。</li><li>NotSupport：不支持。</li>
 */
class ProductInstance extends AbstractModel
{
    /**
     * @var string <p>预付费商品实例类型，取值有：</p><li>StarterPackage：点播新手包。</li><li>MiniProgramPlugin：点播小程序插件。</li><li>ResourcePackage：点播资源包。</li>
     */
    public $ProductType;

    /**
     * @var string <p>资源包实例起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $StartTime;

    /**
     * @var string <p>资源包实例过期日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。</p>
     */
    public $ProductInstanceId;

    /**
     * @var string <p>系统最近一次扣除资源包的日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $LastConsumeDate;

    /**
     * @var integer <p>资源包绑定 License 状态，取值有：</p><li>0：未绑定。</li><li>1：已绑定。</li>
     */
    public $BindStatus;

    /**
     * @var array <p>预付费资源包实例中包含的资源包列表。</p>
     * @deprecated
     */
    public $ProductInstanceResourceSet;

    /**
     * @var array <p>预付费资源包实例中包含的资源包列表。</p>
     */
    public $ResourceSet;

    /**
     * @var string <p>资源包实例的状态，取值有：</p><li>Effective：生效，可用于计费抵扣。</li><li>Isolated：隔离，不可用于计费抵扣。</li>
     */
    public $ProductInstanceStatus;

    /**
     * @var string <p>资源包实例的可退还状态，取值有：</p><li>FullRefund：可全额退款。</li><li>Denied：不可退款。</li>
     */
    public $RefundStatus;

    /**
     * @var string <p>自动续费状态，取值有：</p><li>Never：不自动续费。</li><li>Expire：到期自动续费。</li><li>ExpireOrUseOut：到期或用完自动续费。</li><li>NotSupport：不支持。</li>
     */
    public $RenewStatus;

    /**
     * @param string $ProductType <p>预付费商品实例类型，取值有：</p><li>StarterPackage：点播新手包。</li><li>MiniProgramPlugin：点播小程序插件。</li><li>ResourcePackage：点播资源包。</li>
     * @param string $StartTime <p>资源包实例起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $ExpireTime <p>资源包实例过期日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $ProductInstanceId <p>资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。</p>
     * @param string $LastConsumeDate <p>系统最近一次扣除资源包的日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param integer $BindStatus <p>资源包绑定 License 状态，取值有：</p><li>0：未绑定。</li><li>1：已绑定。</li>
     * @param array $ProductInstanceResourceSet <p>预付费资源包实例中包含的资源包列表。</p>
     * @param array $ResourceSet <p>预付费资源包实例中包含的资源包列表。</p>
     * @param string $ProductInstanceStatus <p>资源包实例的状态，取值有：</p><li>Effective：生效，可用于计费抵扣。</li><li>Isolated：隔离，不可用于计费抵扣。</li>
     * @param string $RefundStatus <p>资源包实例的可退还状态，取值有：</p><li>FullRefund：可全额退款。</li><li>Denied：不可退款。</li>
     * @param string $RenewStatus <p>自动续费状态，取值有：</p><li>Never：不自动续费。</li><li>Expire：到期自动续费。</li><li>ExpireOrUseOut：到期或用完自动续费。</li><li>NotSupport：不支持。</li>
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
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ProductInstanceId",$param) and $param["ProductInstanceId"] !== null) {
            $this->ProductInstanceId = $param["ProductInstanceId"];
        }

        if (array_key_exists("LastConsumeDate",$param) and $param["LastConsumeDate"] !== null) {
            $this->LastConsumeDate = $param["LastConsumeDate"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("ProductInstanceResourceSet",$param) and $param["ProductInstanceResourceSet"] !== null) {
            $this->ProductInstanceResourceSet = [];
            foreach ($param["ProductInstanceResourceSet"] as $key => $value){
                $obj = new ProductInstanceRecource();
                $obj->deserialize($value);
                array_push($this->ProductInstanceResourceSet, $obj);
            }
        }

        if (array_key_exists("ResourceSet",$param) and $param["ResourceSet"] !== null) {
            $this->ResourceSet = [];
            foreach ($param["ResourceSet"] as $key => $value){
                $obj = new ProductInstanceResource();
                $obj->deserialize($value);
                array_push($this->ResourceSet, $obj);
            }
        }

        if (array_key_exists("ProductInstanceStatus",$param) and $param["ProductInstanceStatus"] !== null) {
            $this->ProductInstanceStatus = $param["ProductInstanceStatus"];
        }

        if (array_key_exists("RefundStatus",$param) and $param["RefundStatus"] !== null) {
            $this->RefundStatus = $param["RefundStatus"];
        }

        if (array_key_exists("RenewStatus",$param) and $param["RenewStatus"] !== null) {
            $this->RenewStatus = $param["RenewStatus"];
        }
    }
}
