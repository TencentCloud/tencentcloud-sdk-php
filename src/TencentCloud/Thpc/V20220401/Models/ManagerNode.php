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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 管控节点信息
 *
 * @method string getInstanceChargeType() 获取<p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。</p>枚举值：<ul><li> PREPAID： 预付费，即包年包月</li><li> POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。</p>枚举值：<ul><li> PREPAID： 预付费，即包年包月</li><li> POSTPAID_BY_HOUR： 按小时后付费</li></ul>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
 * @method string getInstanceType() 获取<p>节点机型。不同实例机型指定了不同的资源规格。 <br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li>   </p>
 * @method void setInstanceType(string $InstanceType) 设置<p>节点机型。不同实例机型指定了不同的资源规格。 <br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li>   </p>
 * @method SystemDisk getSystemDisk() 获取<p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method array getDataDisks() 获取<p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method string getInstanceName() 获取<p>节点显示名称。<br><li> 不指定节点显示名称则默认显示‘未命名’。 </li><li>购买多个节点，如果指定模式串<code>{R:x}</code>，表示生成数字[<code>[x, x+n-1]</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_{R:3}</code>，购买1个时，节点显示名称为<code>server_3</code>；购买2个时，节点显示名称分别为<code>server_3</code>，<code>server_4</code>。支持指定多个模式串<code>{R:x}</code>。 购买多个节点，如果不指定模式串，则在节点显示名称添加后缀<code>1、2...n</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_</code>，购买2个时，节点显示名称分别为<code>server_1</code>，<code>server_2</code>。</li><li> 最多支持60个字符（包含模式串）。</li></p>
 * @method void setInstanceName(string $InstanceName) 设置<p>节点显示名称。<br><li> 不指定节点显示名称则默认显示‘未命名’。 </li><li>购买多个节点，如果指定模式串<code>{R:x}</code>，表示生成数字[<code>[x, x+n-1]</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_{R:3}</code>，购买1个时，节点显示名称为<code>server_3</code>；购买2个时，节点显示名称分别为<code>server_3</code>，<code>server_4</code>。支持指定多个模式串<code>{R:x}</code>。 购买多个节点，如果不指定模式串，则在节点显示名称添加后缀<code>1、2...n</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_</code>，购买2个时，节点显示名称分别为<code>server_1</code>，<code>server_2</code>。</li><li> 最多支持60个字符（包含模式串）。</li></p>
 */
class ManagerNode extends AbstractModel
{
    /**
     * @var string <p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。</p>枚举值：<ul><li> PREPAID： 预付费，即包年包月</li><li> POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>节点机型。不同实例机型指定了不同的资源规格。 <br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li>   </p>
     */
    public $InstanceType;

    /**
     * @var SystemDisk <p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     */
    public $DataDisks;

    /**
     * @var InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>节点显示名称。<br><li> 不指定节点显示名称则默认显示‘未命名’。 </li><li>购买多个节点，如果指定模式串<code>{R:x}</code>，表示生成数字[<code>[x, x+n-1]</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_{R:3}</code>，购买1个时，节点显示名称为<code>server_3</code>；购买2个时，节点显示名称分别为<code>server_3</code>，<code>server_4</code>。支持指定多个模式串<code>{R:x}</code>。 购买多个节点，如果不指定模式串，则在节点显示名称添加后缀<code>1、2...n</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_</code>，购买2个时，节点显示名称分别为<code>server_1</code>，<code>server_2</code>。</li><li> 最多支持60个字符（包含模式串）。</li></p>
     */
    public $InstanceName;

    /**
     * @param string $InstanceChargeType <p>节点<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。</p>枚举值：<ul><li> PREPAID： 预付费，即包年包月</li><li> POSTPAID_BY_HOUR： 按小时后付费</li></ul>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月节点的购买时长、是否设置自动续费等属性。若指定节点的付费模式为预付费则该参数必传。</p>
     * @param string $InstanceType <p>节点机型。不同实例机型指定了不同的资源规格。 <br><li>具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。</li>   </p>
     * @param SystemDisk $SystemDisk <p>节点系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     * @param array $DataDisks <p>节点数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     * @param string $InstanceName <p>节点显示名称。<br><li> 不指定节点显示名称则默认显示‘未命名’。 </li><li>购买多个节点，如果指定模式串<code>{R:x}</code>，表示生成数字[<code>[x, x+n-1]</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_{R:3}</code>，购买1个时，节点显示名称为<code>server_3</code>；购买2个时，节点显示名称分别为<code>server_3</code>，<code>server_4</code>。支持指定多个模式串<code>{R:x}</code>。 购买多个节点，如果不指定模式串，则在节点显示名称添加后缀<code>1、2...n</code>，其中<code>n</code>表示购买节点的数量，例如<code>server_</code>，购买2个时，节点显示名称分别为<code>server_1</code>，<code>server_2</code>。</li><li> 最多支持60个字符（包含模式串）。</li></p>
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
