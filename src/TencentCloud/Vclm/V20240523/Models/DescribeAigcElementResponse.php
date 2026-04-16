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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAigcElement返回参数结构体
 *
 * @method string getName() 获取<p>主体名称</p>
 * @method void setName(string $Name) 设置<p>主体名称</p>
 * @method string getElementId() 获取<p>主体id</p>
 * @method void setElementId(string $ElementId) 设置<p>主体id</p>
 * @method string getDescription() 获取<p>主体描述</p>
 * @method void setDescription(string $Description) 设置<p>主体描述</p>
 * @method string getReferenceType() 获取<p>主体参考方式</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体</li><li>image_refer： 多图主体</li></ul>
 * @method void setReferenceType(string $ReferenceType) 设置<p>主体参考方式</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体</li><li>image_refer： 多图主体</li></ul>
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>pending： 执行中</li><li>failed： 任务失败</li><li>succeed： 任务成功</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>pending： 执行中</li><li>failed： 任务失败</li><li>succeed： 任务成功</li></ul>
 * @method array getProvider() 获取<p>厂商列表</p>
 * @method void setProvider(array $Provider) 设置<p>厂商列表</p>
 * @method ElementImageList getElementImageList() 获取<p>主体参考图，可通过多张图片设定主体及其细节</p>
 * @method void setElementImageList(ElementImageList $ElementImageList) 设置<p>主体参考图，可通过多张图片设定主体及其细节</p>
 * @method array getVideoList() 获取<p>主体参考视频，可通过视频设定主体及其细节</p>
 * @method void setVideoList(array $VideoList) 设置<p>主体参考视频，可通过视频设定主体及其细节</p>
 * @method array getTagList() 获取<p>为主体配置标签，一个主体可以配置多个标签</p>
 * @method void setTagList(array $TagList) 设置<p>为主体配置标签，一个主体可以配置多个标签</p>
 * @method array getProviderDetails() 获取<p>厂商聚合字段</p>
 * @method void setProviderDetails(array $ProviderDetails) 设置<p>厂商聚合字段</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getUpdatedAt() 获取<p>更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAigcElementResponse extends AbstractModel
{
    /**
     * @var string <p>主体名称</p>
     */
    public $Name;

    /**
     * @var string <p>主体id</p>
     */
    public $ElementId;

    /**
     * @var string <p>主体描述</p>
     */
    public $Description;

    /**
     * @var string <p>主体参考方式</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体</li><li>image_refer： 多图主体</li></ul>
     */
    public $ReferenceType;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>pending： 执行中</li><li>failed： 任务失败</li><li>succeed： 任务成功</li></ul>
     */
    public $Status;

    /**
     * @var array <p>厂商列表</p>
     */
    public $Provider;

    /**
     * @var ElementImageList <p>主体参考图，可通过多张图片设定主体及其细节</p>
     */
    public $ElementImageList;

    /**
     * @var array <p>主体参考视频，可通过视频设定主体及其细节</p>
     */
    public $VideoList;

    /**
     * @var array <p>为主体配置标签，一个主体可以配置多个标签</p>
     */
    public $TagList;

    /**
     * @var array <p>厂商聚合字段</p>
     */
    public $ProviderDetails;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>主体名称</p>
     * @param string $ElementId <p>主体id</p>
     * @param string $Description <p>主体描述</p>
     * @param string $ReferenceType <p>主体参考方式</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体</li><li>image_refer： 多图主体</li></ul>
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>pending： 执行中</li><li>failed： 任务失败</li><li>succeed： 任务成功</li></ul>
     * @param array $Provider <p>厂商列表</p>
     * @param ElementImageList $ElementImageList <p>主体参考图，可通过多张图片设定主体及其细节</p>
     * @param array $VideoList <p>主体参考视频，可通过视频设定主体及其细节</p>
     * @param array $TagList <p>为主体配置标签，一个主体可以配置多个标签</p>
     * @param array $ProviderDetails <p>厂商聚合字段</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $UpdatedAt <p>更新时间</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ElementImageList",$param) and $param["ElementImageList"] !== null) {
            $this->ElementImageList = new ElementImageList();
            $this->ElementImageList->deserialize($param["ElementImageList"]);
        }

        if (array_key_exists("VideoList",$param) and $param["VideoList"] !== null) {
            $this->VideoList = $param["VideoList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("ProviderDetails",$param) and $param["ProviderDetails"] !== null) {
            $this->ProviderDetails = [];
            foreach ($param["ProviderDetails"] as $key => $value){
                $obj = new ProviderDetail();
                $obj->deserialize($value);
                array_push($this->ProviderDetails, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
