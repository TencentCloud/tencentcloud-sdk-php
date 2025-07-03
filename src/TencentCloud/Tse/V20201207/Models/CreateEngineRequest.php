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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEngine请求参数结构体
 *
 * @method string getEngineType() 获取引擎类型。参考值：
- zookeeper
- nacos
- consul
- apollo
- eureka
- polaris
 * @method void setEngineType(string $EngineType) 设置引擎类型。参考值：
- zookeeper
- nacos
- consul
- apollo
- eureka
- polaris
 * @method string getEngineVersion() 获取引擎的开源版本。每种引擎支持的开源版本不同，请参考产品文档或者控制台购买页
 * @method void setEngineVersion(string $EngineVersion) 设置引擎的开源版本。每种引擎支持的开源版本不同，请参考产品文档或者控制台购买页
 * @method string getEngineProductVersion() 获取引擎的产品版本。参考值：
- STANDARD： 标准版
- PROFESSIONAL: 专业版（Zookeeper）/企业版（PolarisMesh）

引擎各版本及可选择的规格、节点数说明：
apollo - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：1，2，3，4，5

eureka - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：3，4，5

polarismesh - STANDARD版本
规格列表：NUM50、NUM100、NUM200、NUM500、NUM1000、NUM5000、NUM10000、NUM50000

兼容原spec-xxxxxx形式的规格ID
 * @method void setEngineProductVersion(string $EngineProductVersion) 设置引擎的产品版本。参考值：
- STANDARD： 标准版
- PROFESSIONAL: 专业版（Zookeeper）/企业版（PolarisMesh）

引擎各版本及可选择的规格、节点数说明：
apollo - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：1，2，3，4，5

eureka - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：3，4，5

polarismesh - STANDARD版本
规格列表：NUM50、NUM100、NUM200、NUM500、NUM1000、NUM5000、NUM10000、NUM50000

兼容原spec-xxxxxx形式的规格ID
 * @method string getEngineRegion() 获取引擎所在地域。参考值说明：
中国区 参考值：
- ap-guangzhou：广州
- ap-beijing：北京
- ap-chengdu：成都
- ap-chongqing：重庆
- ap-nanjing：南京
- ap-shanghai：上海
- ap-hongkong：香港
- ap-taipei：台北
亚太区 参考值：
- ap-jakarta：雅加达
- ap-singapore：新加坡
北美区 参考值
- na-siliconvalley：硅谷
- na-ashburn: 弗吉尼亚
金融专区 参考值
- ap-beijing-fsi：北京金融
- ap-shanghai-fsi：上海金融
- ap-shenzhen-fsi：深圳金融
 * @method void setEngineRegion(string $EngineRegion) 设置引擎所在地域。参考值说明：
中国区 参考值：
- ap-guangzhou：广州
- ap-beijing：北京
- ap-chengdu：成都
- ap-chongqing：重庆
- ap-nanjing：南京
- ap-shanghai：上海
- ap-hongkong：香港
- ap-taipei：台北
亚太区 参考值：
- ap-jakarta：雅加达
- ap-singapore：新加坡
北美区 参考值
- na-siliconvalley：硅谷
- na-ashburn: 弗吉尼亚
金融专区 参考值
- ap-beijing-fsi：北京金融
- ap-shanghai-fsi：上海金融
- ap-shenzhen-fsi：深圳金融
 * @method string getEngineName() 获取引擎名称。参考值：
- eurek-test
 * @method void setEngineName(string $EngineName) 设置引擎名称。参考值：
- eurek-test
 * @method integer getTradeType() 获取付费类型。参考值：
- 0：后付费
- 1：预付费（接口暂不支持创建预付费实例）
 * @method void setTradeType(integer $TradeType) 设置付费类型。参考值：
- 0：后付费
- 1：预付费（接口暂不支持创建预付费实例）
 * @method string getEngineResourceSpec() 获取引擎的节点规格 ID。参见EngineProductVersion字段说明
 * @method void setEngineResourceSpec(string $EngineResourceSpec) 设置引擎的节点规格 ID。参见EngineProductVersion字段说明
 * @method integer getEngineNodeNum() 获取引擎的节点数量。参见EngineProductVersion字段说明
 * @method void setEngineNodeNum(integer $EngineNodeNum) 设置引擎的节点数量。参见EngineProductVersion字段说明
 * @method string getVpcId() 获取VPC ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- vpc-conz6aix
 * @method void setVpcId(string $VpcId) 设置VPC ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- vpc-conz6aix
 * @method string getSubnetId() 获取子网 ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- subnet-ahde9me9
 * @method void setSubnetId(string $SubnetId) 设置子网 ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- subnet-ahde9me9
 * @method array getApolloEnvParams() 获取Apollo 环境配置参数列表。参数说明：
如果创建Apollo类型，此参数为必填的环境信息列表，最多可选4个环境。环境信息参数说明：
- Name：环境名。参考值：prod, dev, fat, uat
- EngineResourceSpec：环境内引擎的节点规格ID。参见EngineProductVersion参数说明
- EngineNodeNum：环境内引擎的节点数量。参见EngineProductVersion参数说明，其中prod环境支持的节点数为2，3，4，5
- StorageCapacity：配置存储空间大小，以GB为单位，步长为5.参考值：35
- VpcId：VPC ID。参考值：vpc-conz6aix
- SubnetId：子网 ID。参考值：subnet-ahde9me9
 * @method void setApolloEnvParams(array $ApolloEnvParams) 设置Apollo 环境配置参数列表。参数说明：
如果创建Apollo类型，此参数为必填的环境信息列表，最多可选4个环境。环境信息参数说明：
- Name：环境名。参考值：prod, dev, fat, uat
- EngineResourceSpec：环境内引擎的节点规格ID。参见EngineProductVersion参数说明
- EngineNodeNum：环境内引擎的节点数量。参见EngineProductVersion参数说明，其中prod环境支持的节点数为2，3，4，5
- StorageCapacity：配置存储空间大小，以GB为单位，步长为5.参考值：35
- VpcId：VPC ID。参考值：vpc-conz6aix
- SubnetId：子网 ID。参考值：subnet-ahde9me9
 * @method array getEngineTags() 获取引擎的标签列表。用户自定义的key/value形式，无参考值
 * @method void setEngineTags(array $EngineTags) 设置引擎的标签列表。用户自定义的key/value形式，无参考值
 * @method EngineAdmin getEngineAdmin() 获取引擎的初始账号信息。可设置参数：
- Name：控制台初始用户名
- Password：控制台初始密码
- Token：引擎接口的管理员 Token
 * @method void setEngineAdmin(EngineAdmin $EngineAdmin) 设置引擎的初始账号信息。可设置参数：
- Name：控制台初始用户名
- Password：控制台初始密码
- Token：引擎接口的管理员 Token
 * @method integer getPrepaidPeriod() 获取预付费时长，以月为单位
 * @method void setPrepaidPeriod(integer $PrepaidPeriod) 设置预付费时长，以月为单位
 * @method integer getPrepaidRenewFlag() 获取自动续费标记，仅预付费使用。参考值：
- 0：不自动续费
- 1：自动续费
 * @method void setPrepaidRenewFlag(integer $PrepaidRenewFlag) 设置自动续费标记，仅预付费使用。参考值：
- 0：不自动续费
- 1：自动续费
 * @method array getEngineRegionInfos() 获取跨地域部署的引擎地域配置详情
zk标准版没有跨地域部署，请不要填写
zk专业版跨地域部署开启了固定Leader所在地域，需要满足以下条件
- 固定Leader所在地域当前仅支持跨两个地域
- leader地域的副本数必须是3/2 + 1，5/2+1，7/2+1，也就是 2，3，4
 * @method void setEngineRegionInfos(array $EngineRegionInfos) 设置跨地域部署的引擎地域配置详情
zk标准版没有跨地域部署，请不要填写
zk专业版跨地域部署开启了固定Leader所在地域，需要满足以下条件
- 固定Leader所在地域当前仅支持跨两个地域
- leader地域的副本数必须是3/2 + 1，5/2+1，7/2+1，也就是 2，3，4
 * @method string getStorageType() 获取zk标准版请填CLOUD_PREMIUM，zk标准版无法选择磁盘类型和磁盘容量，默认为CLOUD_PREMIUM
zk专业版可以为：CLOUD_SSD,CLOUD_SSD_PLUS,CLOUD_PREMIUM
 * @method void setStorageType(string $StorageType) 设置zk标准版请填CLOUD_PREMIUM，zk标准版无法选择磁盘类型和磁盘容量，默认为CLOUD_PREMIUM
zk专业版可以为：CLOUD_SSD,CLOUD_SSD_PLUS,CLOUD_PREMIUM
 * @method integer getStorageCapacity() 获取zk标准版请填50，zk标准版无法选择磁盘类型和磁盘容量，磁盘容量默认为50
 * @method void setStorageCapacity(integer $StorageCapacity) 设置zk标准版请填50，zk标准版无法选择磁盘类型和磁盘容量，磁盘容量默认为50
 * @method array getStorageOption() 获取zk专业版至多有两个盘，且磁盘的容量在50-3200之间
如果只有一个磁盘，storageCapacity与storageOption里面的capacity应该一致
 * @method void setStorageOption(array $StorageOption) 设置zk专业版至多有两个盘，且磁盘的容量在50-3200之间
如果只有一个磁盘，storageCapacity与storageOption里面的capacity应该一致
 * @method string getAffinityConstraint() 获取ZK引擎实例，可用区分布约束，STRICT:强约束，PERMISSIVE: 弱约束
 * @method void setAffinityConstraint(string $AffinityConstraint) 设置ZK引擎实例，可用区分布约束，STRICT:强约束，PERMISSIVE: 弱约束
 */
class CreateEngineRequest extends AbstractModel
{
    /**
     * @var string 引擎类型。参考值：
- zookeeper
- nacos
- consul
- apollo
- eureka
- polaris
     */
    public $EngineType;

    /**
     * @var string 引擎的开源版本。每种引擎支持的开源版本不同，请参考产品文档或者控制台购买页
     */
    public $EngineVersion;

    /**
     * @var string 引擎的产品版本。参考值：
- STANDARD： 标准版
- PROFESSIONAL: 专业版（Zookeeper）/企业版（PolarisMesh）

引擎各版本及可选择的规格、节点数说明：
apollo - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：1，2，3，4，5

eureka - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：3，4，5

polarismesh - STANDARD版本
规格列表：NUM50、NUM100、NUM200、NUM500、NUM1000、NUM5000、NUM10000、NUM50000

兼容原spec-xxxxxx形式的规格ID
     */
    public $EngineProductVersion;

    /**
     * @var string 引擎所在地域。参考值说明：
中国区 参考值：
- ap-guangzhou：广州
- ap-beijing：北京
- ap-chengdu：成都
- ap-chongqing：重庆
- ap-nanjing：南京
- ap-shanghai：上海
- ap-hongkong：香港
- ap-taipei：台北
亚太区 参考值：
- ap-jakarta：雅加达
- ap-singapore：新加坡
北美区 参考值
- na-siliconvalley：硅谷
- na-ashburn: 弗吉尼亚
金融专区 参考值
- ap-beijing-fsi：北京金融
- ap-shanghai-fsi：上海金融
- ap-shenzhen-fsi：深圳金融
     */
    public $EngineRegion;

    /**
     * @var string 引擎名称。参考值：
- eurek-test
     */
    public $EngineName;

    /**
     * @var integer 付费类型。参考值：
- 0：后付费
- 1：预付费（接口暂不支持创建预付费实例）
     */
    public $TradeType;

    /**
     * @var string 引擎的节点规格 ID。参见EngineProductVersion字段说明
     */
    public $EngineResourceSpec;

    /**
     * @var integer 引擎的节点数量。参见EngineProductVersion字段说明
     */
    public $EngineNodeNum;

    /**
     * @var string VPC ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- vpc-conz6aix
     */
    public $VpcId;

    /**
     * @var string 子网 ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- subnet-ahde9me9
     */
    public $SubnetId;

    /**
     * @var array Apollo 环境配置参数列表。参数说明：
如果创建Apollo类型，此参数为必填的环境信息列表，最多可选4个环境。环境信息参数说明：
- Name：环境名。参考值：prod, dev, fat, uat
- EngineResourceSpec：环境内引擎的节点规格ID。参见EngineProductVersion参数说明
- EngineNodeNum：环境内引擎的节点数量。参见EngineProductVersion参数说明，其中prod环境支持的节点数为2，3，4，5
- StorageCapacity：配置存储空间大小，以GB为单位，步长为5.参考值：35
- VpcId：VPC ID。参考值：vpc-conz6aix
- SubnetId：子网 ID。参考值：subnet-ahde9me9
     */
    public $ApolloEnvParams;

    /**
     * @var array 引擎的标签列表。用户自定义的key/value形式，无参考值
     */
    public $EngineTags;

    /**
     * @var EngineAdmin 引擎的初始账号信息。可设置参数：
- Name：控制台初始用户名
- Password：控制台初始密码
- Token：引擎接口的管理员 Token
     */
    public $EngineAdmin;

    /**
     * @var integer 预付费时长，以月为单位
     */
    public $PrepaidPeriod;

    /**
     * @var integer 自动续费标记，仅预付费使用。参考值：
- 0：不自动续费
- 1：自动续费
     */
    public $PrepaidRenewFlag;

    /**
     * @var array 跨地域部署的引擎地域配置详情
zk标准版没有跨地域部署，请不要填写
zk专业版跨地域部署开启了固定Leader所在地域，需要满足以下条件
- 固定Leader所在地域当前仅支持跨两个地域
- leader地域的副本数必须是3/2 + 1，5/2+1，7/2+1，也就是 2，3，4
     */
    public $EngineRegionInfos;

    /**
     * @var string zk标准版请填CLOUD_PREMIUM，zk标准版无法选择磁盘类型和磁盘容量，默认为CLOUD_PREMIUM
zk专业版可以为：CLOUD_SSD,CLOUD_SSD_PLUS,CLOUD_PREMIUM
     */
    public $StorageType;

    /**
     * @var integer zk标准版请填50，zk标准版无法选择磁盘类型和磁盘容量，磁盘容量默认为50
     */
    public $StorageCapacity;

    /**
     * @var array zk专业版至多有两个盘，且磁盘的容量在50-3200之间
如果只有一个磁盘，storageCapacity与storageOption里面的capacity应该一致
     */
    public $StorageOption;

    /**
     * @var string ZK引擎实例，可用区分布约束，STRICT:强约束，PERMISSIVE: 弱约束
     */
    public $AffinityConstraint;

    /**
     * @param string $EngineType 引擎类型。参考值：
- zookeeper
- nacos
- consul
- apollo
- eureka
- polaris
     * @param string $EngineVersion 引擎的开源版本。每种引擎支持的开源版本不同，请参考产品文档或者控制台购买页
     * @param string $EngineProductVersion 引擎的产品版本。参考值：
- STANDARD： 标准版
- PROFESSIONAL: 专业版（Zookeeper）/企业版（PolarisMesh）

引擎各版本及可选择的规格、节点数说明：
apollo - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：1，2，3，4，5

eureka - STANDARD版本
规格列表：1C2G、2C4G、4C8G、8C16G、16C32G
节点数：3，4，5

polarismesh - STANDARD版本
规格列表：NUM50、NUM100、NUM200、NUM500、NUM1000、NUM5000、NUM10000、NUM50000

兼容原spec-xxxxxx形式的规格ID
     * @param string $EngineRegion 引擎所在地域。参考值说明：
中国区 参考值：
- ap-guangzhou：广州
- ap-beijing：北京
- ap-chengdu：成都
- ap-chongqing：重庆
- ap-nanjing：南京
- ap-shanghai：上海
- ap-hongkong：香港
- ap-taipei：台北
亚太区 参考值：
- ap-jakarta：雅加达
- ap-singapore：新加坡
北美区 参考值
- na-siliconvalley：硅谷
- na-ashburn: 弗吉尼亚
金融专区 参考值
- ap-beijing-fsi：北京金融
- ap-shanghai-fsi：上海金融
- ap-shenzhen-fsi：深圳金融
     * @param string $EngineName 引擎名称。参考值：
- eurek-test
     * @param integer $TradeType 付费类型。参考值：
- 0：后付费
- 1：预付费（接口暂不支持创建预付费实例）
     * @param string $EngineResourceSpec 引擎的节点规格 ID。参见EngineProductVersion字段说明
     * @param integer $EngineNodeNum 引擎的节点数量。参见EngineProductVersion字段说明
     * @param string $VpcId VPC ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- vpc-conz6aix
     * @param string $SubnetId 子网 ID。在 VPC 的子网内分配一个 IP 作为引擎的访问地址。参考值：
- subnet-ahde9me9
     * @param array $ApolloEnvParams Apollo 环境配置参数列表。参数说明：
如果创建Apollo类型，此参数为必填的环境信息列表，最多可选4个环境。环境信息参数说明：
- Name：环境名。参考值：prod, dev, fat, uat
- EngineResourceSpec：环境内引擎的节点规格ID。参见EngineProductVersion参数说明
- EngineNodeNum：环境内引擎的节点数量。参见EngineProductVersion参数说明，其中prod环境支持的节点数为2，3，4，5
- StorageCapacity：配置存储空间大小，以GB为单位，步长为5.参考值：35
- VpcId：VPC ID。参考值：vpc-conz6aix
- SubnetId：子网 ID。参考值：subnet-ahde9me9
     * @param array $EngineTags 引擎的标签列表。用户自定义的key/value形式，无参考值
     * @param EngineAdmin $EngineAdmin 引擎的初始账号信息。可设置参数：
- Name：控制台初始用户名
- Password：控制台初始密码
- Token：引擎接口的管理员 Token
     * @param integer $PrepaidPeriod 预付费时长，以月为单位
     * @param integer $PrepaidRenewFlag 自动续费标记，仅预付费使用。参考值：
- 0：不自动续费
- 1：自动续费
     * @param array $EngineRegionInfos 跨地域部署的引擎地域配置详情
zk标准版没有跨地域部署，请不要填写
zk专业版跨地域部署开启了固定Leader所在地域，需要满足以下条件
- 固定Leader所在地域当前仅支持跨两个地域
- leader地域的副本数必须是3/2 + 1，5/2+1，7/2+1，也就是 2，3，4
     * @param string $StorageType zk标准版请填CLOUD_PREMIUM，zk标准版无法选择磁盘类型和磁盘容量，默认为CLOUD_PREMIUM
zk专业版可以为：CLOUD_SSD,CLOUD_SSD_PLUS,CLOUD_PREMIUM
     * @param integer $StorageCapacity zk标准版请填50，zk标准版无法选择磁盘类型和磁盘容量，磁盘容量默认为50
     * @param array $StorageOption zk专业版至多有两个盘，且磁盘的容量在50-3200之间
如果只有一个磁盘，storageCapacity与storageOption里面的capacity应该一致
     * @param string $AffinityConstraint ZK引擎实例，可用区分布约束，STRICT:强约束，PERMISSIVE: 弱约束
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
        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("EngineProductVersion",$param) and $param["EngineProductVersion"] !== null) {
            $this->EngineProductVersion = $param["EngineProductVersion"];
        }

        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("EngineResourceSpec",$param) and $param["EngineResourceSpec"] !== null) {
            $this->EngineResourceSpec = $param["EngineResourceSpec"];
        }

        if (array_key_exists("EngineNodeNum",$param) and $param["EngineNodeNum"] !== null) {
            $this->EngineNodeNum = $param["EngineNodeNum"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ApolloEnvParams",$param) and $param["ApolloEnvParams"] !== null) {
            $this->ApolloEnvParams = [];
            foreach ($param["ApolloEnvParams"] as $key => $value){
                $obj = new ApolloEnvParam();
                $obj->deserialize($value);
                array_push($this->ApolloEnvParams, $obj);
            }
        }

        if (array_key_exists("EngineTags",$param) and $param["EngineTags"] !== null) {
            $this->EngineTags = [];
            foreach ($param["EngineTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->EngineTags, $obj);
            }
        }

        if (array_key_exists("EngineAdmin",$param) and $param["EngineAdmin"] !== null) {
            $this->EngineAdmin = new EngineAdmin();
            $this->EngineAdmin->deserialize($param["EngineAdmin"]);
        }

        if (array_key_exists("PrepaidPeriod",$param) and $param["PrepaidPeriod"] !== null) {
            $this->PrepaidPeriod = $param["PrepaidPeriod"];
        }

        if (array_key_exists("PrepaidRenewFlag",$param) and $param["PrepaidRenewFlag"] !== null) {
            $this->PrepaidRenewFlag = $param["PrepaidRenewFlag"];
        }

        if (array_key_exists("EngineRegionInfos",$param) and $param["EngineRegionInfos"] !== null) {
            $this->EngineRegionInfos = [];
            foreach ($param["EngineRegionInfos"] as $key => $value){
                $obj = new EngineRegionInfo();
                $obj->deserialize($value);
                array_push($this->EngineRegionInfos, $obj);
            }
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageCapacity",$param) and $param["StorageCapacity"] !== null) {
            $this->StorageCapacity = $param["StorageCapacity"];
        }

        if (array_key_exists("StorageOption",$param) and $param["StorageOption"] !== null) {
            $this->StorageOption = [];
            foreach ($param["StorageOption"] as $key => $value){
                $obj = new StorageOption();
                $obj->deserialize($value);
                array_push($this->StorageOption, $obj);
            }
        }

        if (array_key_exists("AffinityConstraint",$param) and $param["AffinityConstraint"] !== null) {
            $this->AffinityConstraint = $param["AffinityConstraint"];
        }
    }
}
