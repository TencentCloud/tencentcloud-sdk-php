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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryHunyuan3DTask返回参数结构体
 *
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
 * @method integer getProgress() 获取<p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
 * @method void setProgress(integer $Progress) 设置<p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
 * @method string getErrorCode() 获取<p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
 * @method string getErrorMessage() 获取<p>仅 Status=FAIL 时有值，详细文案</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>仅 Status=FAIL 时有值，详细文案</p>
 * @method array getResultFile3Ds() 获取<p>仅 Status=DONE 时有值，产物文件列表</p>
 * @method void setResultFile3Ds(array $ResultFile3Ds) 设置<p>仅 Status=DONE 时有值，产物文件列表</p>
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskType() 获取<p>任务类型</p><p>枚举值：</p><ul><li>text_to_3d： 文生3D</li><li>image_to_3d： 图生3D</li><li>multiview_to_3d： 多视图生3D</li><li>mesh_to_texture： 网格生纹理</li><li>mesh_to_geometry： 网格生几何</li></ul>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型</p><p>枚举值：</p><ul><li>text_to_3d： 文生3D</li><li>image_to_3d： 图生3D</li><li>multiview_to_3d： 多视图生3D</li><li>mesh_to_texture： 网格生纹理</li><li>mesh_to_geometry： 网格生几何</li></ul>
 * @method string getPrompt() 获取<p>输入的Prompt</p>
 * @method void setPrompt(string $Prompt) 设置<p>输入的Prompt</p>
 * @method string getRefImage() 获取<p>图生3D场景下输入的图片URL</p>
 * @method void setRefImage(string $RefImage) 设置<p>图生3D场景下输入的图片URL</p>
 * @method array getMultiViewImages() 获取<p>多图生3D场景下输入的图片信息</p>
 * @method void setMultiViewImages(array $MultiViewImages) 设置<p>多图生3D场景下输入的图片信息</p>
 * @method string getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
 * @method string getUpdateTime() 获取<p>任务更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>任务更新时间</p>
 * @method integer getFaceCount() 获取<p>提交任务的目标面数</p>
 * @method void setFaceCount(integer $FaceCount) 设置<p>提交任务的目标面数</p>
 * @method string getGenerateType() 获取<p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
 * @method void setGenerateType(string $GenerateType) 设置<p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
 * @method integer getQueuePosition() 获取<p>任务在队列中的位置，数值越小越靠前；</p>
 * @method void setQueuePosition(integer $QueuePosition) 设置<p>任务在队列中的位置，数值越小越靠前；</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryHunyuan3DTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
     */
    public $Progress;

    /**
     * @var string <p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>仅 Status=FAIL 时有值，详细文案</p>
     */
    public $ErrorMessage;

    /**
     * @var array <p>仅 Status=DONE 时有值，产物文件列表</p>
     */
    public $ResultFile3Ds;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务类型</p><p>枚举值：</p><ul><li>text_to_3d： 文生3D</li><li>image_to_3d： 图生3D</li><li>multiview_to_3d： 多视图生3D</li><li>mesh_to_texture： 网格生纹理</li><li>mesh_to_geometry： 网格生几何</li></ul>
     */
    public $TaskType;

    /**
     * @var string <p>输入的Prompt</p>
     */
    public $Prompt;

    /**
     * @var string <p>图生3D场景下输入的图片URL</p>
     */
    public $RefImage;

    /**
     * @var array <p>多图生3D场景下输入的图片信息</p>
     */
    public $MultiViewImages;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>提交任务的目标面数</p>
     */
    public $FaceCount;

    /**
     * @var string <p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
     */
    public $GenerateType;

    /**
     * @var integer <p>任务在队列中的位置，数值越小越靠前；</p>
     */
    public $QueuePosition;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
     * @param integer $Progress <p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
     * @param string $ErrorCode <p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
     * @param string $ErrorMessage <p>仅 Status=FAIL 时有值，详细文案</p>
     * @param array $ResultFile3Ds <p>仅 Status=DONE 时有值，产物文件列表</p>
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskType <p>任务类型</p><p>枚举值：</p><ul><li>text_to_3d： 文生3D</li><li>image_to_3d： 图生3D</li><li>multiview_to_3d： 多视图生3D</li><li>mesh_to_texture： 网格生纹理</li><li>mesh_to_geometry： 网格生几何</li></ul>
     * @param string $Prompt <p>输入的Prompt</p>
     * @param string $RefImage <p>图生3D场景下输入的图片URL</p>
     * @param array $MultiViewImages <p>多图生3D场景下输入的图片信息</p>
     * @param string $CreateTime <p>任务创建时间</p>
     * @param string $UpdateTime <p>任务更新时间</p>
     * @param integer $FaceCount <p>提交任务的目标面数</p>
     * @param string $GenerateType <p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
     * @param integer $QueuePosition <p>任务在队列中的位置，数值越小越靠前；</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultFile3Ds",$param) and $param["ResultFile3Ds"] !== null) {
            $this->ResultFile3Ds = [];
            foreach ($param["ResultFile3Ds"] as $key => $value){
                $obj = new File3D();
                $obj->deserialize($value);
                array_push($this->ResultFile3Ds, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("RefImage",$param) and $param["RefImage"] !== null) {
            $this->RefImage = $param["RefImage"];
        }

        if (array_key_exists("MultiViewImages",$param) and $param["MultiViewImages"] !== null) {
            $this->MultiViewImages = [];
            foreach ($param["MultiViewImages"] as $key => $value){
                $obj = new ViewImage();
                $obj->deserialize($value);
                array_push($this->MultiViewImages, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FaceCount",$param) and $param["FaceCount"] !== null) {
            $this->FaceCount = $param["FaceCount"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("QueuePosition",$param) and $param["QueuePosition"] !== null) {
            $this->QueuePosition = $param["QueuePosition"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
