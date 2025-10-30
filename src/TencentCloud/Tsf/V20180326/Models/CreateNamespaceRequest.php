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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNamespace请求参数结构体
 *
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getClusterId() 获取集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
 * @method void setClusterId(string $ClusterId) 设置集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
 * @method string getNamespaceDesc() 获取命名空间描述
 * @method void setNamespaceDesc(string $NamespaceDesc) 设置命名空间描述
 * @method string getNamespaceResourceType() 获取命名空间资源类型；DEF：表示默认资源类型；GW：表示网关资源类型
 * @method void setNamespaceResourceType(string $NamespaceResourceType) 设置命名空间资源类型；DEF：表示默认资源类型；GW：表示网关资源类型
 * @method string getNamespaceType() 获取命名空间类型；DEF 表示默认普通命名空间；GLOBAL 表示全局命名空间
 * @method void setNamespaceType(string $NamespaceType) 设置命名空间类型；DEF 表示默认普通命名空间；GLOBAL 表示全局命名空间
 * @method string getNamespaceId() 获取命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
 * @method string getIsHaEnable() 获取是否开启高可用，1 表示开启，0 表示不开启
 * @method void setIsHaEnable(string $IsHaEnable) 设置是否开启高可用，1 表示开启，0 表示不开启
 * @method string getProgramId() 获取需要绑定的数据集ID，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
 * @method void setProgramId(string $ProgramId) 设置需要绑定的数据集ID，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
 * @method array getProgramIdList() 获取需要绑定的数据集ID列表，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
 * @method void setProgramIdList(array $ProgramIdList) 设置需要绑定的数据集ID列表，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
 * @method boolean getCreateK8sNamespaceFlag() 获取是否创建k8s命名空间标识
 * @method void setCreateK8sNamespaceFlag(boolean $CreateK8sNamespaceFlag) 设置是否创建k8s命名空间标识
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
     */
    public $ClusterId;

    /**
     * @var string 命名空间描述
     */
    public $NamespaceDesc;

    /**
     * @var string 命名空间资源类型；DEF：表示默认资源类型；GW：表示网关资源类型
     */
    public $NamespaceResourceType;

    /**
     * @var string 命名空间类型；DEF 表示默认普通命名空间；GLOBAL 表示全局命名空间
     */
    public $NamespaceType;

    /**
     * @var string 命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
     */
    public $NamespaceId;

    /**
     * @var string 是否开启高可用，1 表示开启，0 表示不开启
     */
    public $IsHaEnable;

    /**
     * @var string 需要绑定的数据集ID，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
     */
    public $ProgramId;

    /**
     * @var array 需要绑定的数据集ID列表，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
     */
    public $ProgramIdList;

    /**
     * @var boolean 是否创建k8s命名空间标识
     */
    public $CreateK8sNamespaceFlag;

    /**
     * @param string $NamespaceName 命名空间名称
     * @param string $ClusterId 集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
     * @param string $NamespaceDesc 命名空间描述
     * @param string $NamespaceResourceType 命名空间资源类型；DEF：表示默认资源类型；GW：表示网关资源类型
     * @param string $NamespaceType 命名空间类型；DEF 表示默认普通命名空间；GLOBAL 表示全局命名空间
     * @param string $NamespaceId 命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
     * @param string $IsHaEnable 是否开启高可用，1 表示开启，0 表示不开启
     * @param string $ProgramId 需要绑定的数据集ID，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
     * @param array $ProgramIdList 需要绑定的数据集ID列表，可通过调用[DescribePrograms](https://cloud.tencent.com/document/api/649/73477)查询已创建的数据集列表或登录控制台进行查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/api/649/108544)创建新的数据集。
     * @param boolean $CreateK8sNamespaceFlag 是否创建k8s命名空间标识
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
        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceDesc",$param) and $param["NamespaceDesc"] !== null) {
            $this->NamespaceDesc = $param["NamespaceDesc"];
        }

        if (array_key_exists("NamespaceResourceType",$param) and $param["NamespaceResourceType"] !== null) {
            $this->NamespaceResourceType = $param["NamespaceResourceType"];
        }

        if (array_key_exists("NamespaceType",$param) and $param["NamespaceType"] !== null) {
            $this->NamespaceType = $param["NamespaceType"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("IsHaEnable",$param) and $param["IsHaEnable"] !== null) {
            $this->IsHaEnable = $param["IsHaEnable"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }

        if (array_key_exists("CreateK8sNamespaceFlag",$param) and $param["CreateK8sNamespaceFlag"] !== null) {
            $this->CreateK8sNamespaceFlag = $param["CreateK8sNamespaceFlag"];
        }
    }
}
