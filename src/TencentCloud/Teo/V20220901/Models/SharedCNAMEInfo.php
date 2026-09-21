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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享CNAME明细
 *
 * @method string getType() 获取<p>共享CNAME类型：取值范围如下：</p><li>custom：由用户创建的自定义共享CNAME</li><li>ip-ssl：IP SSL类型的共享CNAME</li><li>zero-rating：免流类型的共享CNAME</li><li>preset：预置资源类型的共享CNAME</li>
 * @method void setType(string $Type) 设置<p>共享CNAME类型：取值范围如下：</p><li>custom：由用户创建的自定义共享CNAME</li><li>ip-ssl：IP SSL类型的共享CNAME</li><li>zero-rating：免流类型的共享CNAME</li><li>preset：预置资源类型的共享CNAME</li>
 * @method string getSharedCNAME() 获取<p>共享CNAME名称。</p>
 * @method void setSharedCNAME(string $SharedCNAME) 设置<p>共享CNAME名称。</p>
 * @method string getDescription() 获取<p>描述。</p>
 * @method void setDescription(string $Description) 设置<p>描述。</p>
 * @method IPSSLConfig getIPSSLConfig() 获取<p>当type为ip-ssl时，展示该共享CNAME关联的 IP SSL 配置信息。</p>
 * @method void setIPSSLConfig(IPSSLConfig $IPSSLConfig) 设置<p>当type为ip-ssl时，展示该共享CNAME关联的 IP SSL 配置信息。</p>
 * @method integer getBindDomainCount() 获取<p>共享CNAME绑定的加速域名数量。</p>
 * @method void setBindDomainCount(integer $BindDomainCount) 设置<p>共享CNAME绑定的加速域名数量。</p>
 * @method array getAccelerationDomains() 获取<p>加入该共享CNAME的加速域名列表。当加入的域名数量超过100个时，只返回前100个加速域名。</p>
 * @method void setAccelerationDomains(array $AccelerationDomains) 设置<p>加入该共享CNAME的加速域名列表。当加入的域名数量超过100个时，只返回前100个加速域名。</p>
 */
class SharedCNAMEInfo extends AbstractModel
{
    /**
     * @var string <p>共享CNAME类型：取值范围如下：</p><li>custom：由用户创建的自定义共享CNAME</li><li>ip-ssl：IP SSL类型的共享CNAME</li><li>zero-rating：免流类型的共享CNAME</li><li>preset：预置资源类型的共享CNAME</li>
     */
    public $Type;

    /**
     * @var string <p>共享CNAME名称。</p>
     */
    public $SharedCNAME;

    /**
     * @var string <p>描述。</p>
     */
    public $Description;

    /**
     * @var IPSSLConfig <p>当type为ip-ssl时，展示该共享CNAME关联的 IP SSL 配置信息。</p>
     */
    public $IPSSLConfig;

    /**
     * @var integer <p>共享CNAME绑定的加速域名数量。</p>
     */
    public $BindDomainCount;

    /**
     * @var array <p>加入该共享CNAME的加速域名列表。当加入的域名数量超过100个时，只返回前100个加速域名。</p>
     */
    public $AccelerationDomains;

    /**
     * @param string $Type <p>共享CNAME类型：取值范围如下：</p><li>custom：由用户创建的自定义共享CNAME</li><li>ip-ssl：IP SSL类型的共享CNAME</li><li>zero-rating：免流类型的共享CNAME</li><li>preset：预置资源类型的共享CNAME</li>
     * @param string $SharedCNAME <p>共享CNAME名称。</p>
     * @param string $Description <p>描述。</p>
     * @param IPSSLConfig $IPSSLConfig <p>当type为ip-ssl时，展示该共享CNAME关联的 IP SSL 配置信息。</p>
     * @param integer $BindDomainCount <p>共享CNAME绑定的加速域名数量。</p>
     * @param array $AccelerationDomains <p>加入该共享CNAME的加速域名列表。当加入的域名数量超过100个时，只返回前100个加速域名。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IPSSLConfig",$param) and $param["IPSSLConfig"] !== null) {
            $this->IPSSLConfig = new IPSSLConfig();
            $this->IPSSLConfig->deserialize($param["IPSSLConfig"]);
        }

        if (array_key_exists("BindDomainCount",$param) and $param["BindDomainCount"] !== null) {
            $this->BindDomainCount = $param["BindDomainCount"];
        }

        if (array_key_exists("AccelerationDomains",$param) and $param["AccelerationDomains"] !== null) {
            $this->AccelerationDomains = [];
            foreach ($param["AccelerationDomains"] as $key => $value){
                $obj = new ReferenceHolder();
                $obj->deserialize($value);
                array_push($this->AccelerationDomains, $obj);
            }
        }
    }
}
